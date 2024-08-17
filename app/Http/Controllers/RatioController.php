<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ratio;

class RatioController extends Controller
{
  protected $model;

  public function __construct(Ratio $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Ratio', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with('element')->get();
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
