<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
  protected $model;

  public function __construct(Order $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Order', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with('files','executor')->get();
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
