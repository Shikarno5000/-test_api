<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  protected $model;

  public function __construct(Product $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Product', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function show(int $id)
  {
    if ($localModel = $this->model::with(['timelines', 'stages', 'files', 'chapter.subgroup.direction.project', 'productPlks', 'productElements', 'specification.contract', 'developer'])->find($id)) {
      // получение версий шкафа
      $localModel['versions'] = $this->model::where(['version_group' => $id])->select(['id', 'version_date', 'version_comment', 'version_price', 'version_pfa', 'created_at', 'created_by', 'updated_at', 'updated_by'])->get($id);
      return $localModel;
    }
    return response()->json('Сущность не найдена',404);
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
}
