<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;

class SuggestionController extends Controller
{
  protected $model;


  public function __construct(Suggestion $model)
  {
    $this->middleware('auth:api');
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with('files')->get();
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

  public function batchEditing(Request $request)
  {
    return $this->defaultBatchEditing($this->model, $request->all());
  }
}
