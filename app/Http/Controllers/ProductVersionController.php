<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductVersionController extends Controller
{
  protected $model;

  public function __construct(Product $model)
  {
    $this->middleware('auth:api');
    // $this->middleware('requestValidation:App\Models\Product', ['only' => ['update']]);
    $this->model = $model;
  }

  public function update(int $id, Request $request)
  {
    return $this->defaultUpdate($id, $this->model, $request->all());
  }

  public function delete(int $id)
  {
    return $this->defaultDelete($id, $this->model);
  }

  public function store(int $id, Request $request)
  {
    try {
      // получение новых значений
      $validator = Validator::make($request->all(), [
        'version_date' => 'nullable|date',
        'version_comment' => 'nullable|string|max:100',
        'version_price' => 'nullable|numeric',
        'version_pfa' => 'nullable|boolean',
      ]);
      if ($validator->fails()) {
        return $this->errorResponse($validator->errors(), 'validationError');
      }
      $newValues = $validator->validated();


      // создание новой версии
      $originalModel = $this->model::find($id);
      $newModel = $originalModel->replicate();
      $newModel['version'] = 1;
      $newModel['version_group'] = $originalModel['id'];
      isset($newValues['version_date']) && $newModel['version_date'] = $newValues['version_date'];
      isset($newValues['version_comment']) && $newModel['version_comment'] = $newValues['version_comment'];
      isset($newValues['version_price']) && $newModel['version_price'] = $newValues['version_price'];
      $newModel['version_pfa'] = $newValues['version_pfa'];
      $newModel['updated_by'] = null;
      $newModel['created_by'] = Auth::user()->id;
      $newModel->push();

      // копирование привязанностей
      foreach ($originalModel->productPlks as $item) {
        $clone = $item->replicate();
        $newModel->productPlks()->save($clone);
      }
      foreach ($originalModel->productElements as $item) {
        $clone = $item->replicate();
        $newModel->productElements()->save($clone);
      }


      return $this->goodResponse(true);
    } catch (\Illuminate\Database\QueryException $e) {
      $errorInfo = $e->errorInfo;
      return $this->errorResponse($errorInfo[2], 'Ошибка добавления в базу');
    }

    // return $this->defaultStore($this->model, $request->all());
  }
}
