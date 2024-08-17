<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dpu;

class DpuController extends Controller
{
  protected $model;

  public function __construct(Dpu $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Dpu', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->goodResponse($this->model::with('files')->get());
  }

  public function select()
  {
    return $this->defaultSelect($this->model);
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
