<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElementPrice;

class ElementPriceController extends Controller
{
  protected $model;

  public function __construct(ElementPrice $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\ElementPrice', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with(['element', 'counterAgent'])->get();
  }

  public function element(int $id)
  {
    return $this->model::where(['element_id' => $id])->with(['counterAgent'])->get();
  }
  public function select(int $id)
  {
    try {
      $result = $this->model::where(['element_id' => $id])->with(['counterAgent'])->get();
      $selectArray = [];
      foreach ($result as $arr) {
        $selectArray[] = [
          'id' => $arr['id'],
          'name' => $arr['counterAgent']['name_short'] . ' Цена: ' . $arr['price'] . ' Цена для матрикса: ' . $arr['price_for_matrix']
        ];
      }
      return $this->goodResponse($selectArray);
    } catch (\Illuminate\Database\QueryException $e) {
      $errorInfo = $e->errorInfo;
      return $this->errorResponse($errorInfo[2], 'Ошибка получения данных');
    }
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
