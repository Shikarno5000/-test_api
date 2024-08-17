<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
  protected $model;

  public function __construct(Question $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Question', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

    public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['offers.author','decisions.responsible','internalMeeting']);
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
