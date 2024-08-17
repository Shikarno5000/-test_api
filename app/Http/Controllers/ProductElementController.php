<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductElement;

class ProductElementController extends Controller
{
  protected $model;

  public function __construct(ProductElement $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\ProductElement', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->goodResponse($this->model::with('files')->get());
  }

  public function update(int $id, Request $request)
  {
    return $this->defaultUpdate($id, $this->model, $request->all());
  }

  public function delete(int $id)
  {
    return $this->defaultDelete($id, $this->model);
  }

  public function store(Request $request)
  {
    return $this->defaultStore($this->model, $request->all());
  }
  public function addArray(Request $request)
  {
    try {
      foreach ($request->all() as $values) {
        $this->model::create($this->valWithCreatedBy($values));
      }
      return $this->goodResponse(true);
    } catch (\Illuminate\Database\QueryException $e) {
      $errorInfo = $e->errorInfo;
      return $this->errorResponse($errorInfo[2], 'Ошибка добавления в базу');
    }
  }
  public function delAll(int $id)
  {
    try {
      $this->model::where(['product_id' => $id])->delete();
      return $this->goodResponse(true);
    } catch (\Illuminate\Database\QueryException $e) {
      $errorInfo = $e->errorInfo;
      return $this->errorResponse($errorInfo[2], 'Ошибка добавления в базу');
    }
  }
}
