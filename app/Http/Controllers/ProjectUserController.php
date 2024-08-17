<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;

class ProjectUserController extends Controller
{
  protected $model;

  public function __construct(Project $model)
  {
    $this->middleware('auth:api');
    $this->model = $model;
  }

  public function update(int $id, Request $request)
  {
    if (count($request->all()) === 0) {
      return $this->emptyRequest();
    }
    $validator = Validator::make($request->all(), ['users' => '']);
    if ($validator->fails()) {
      return $this->errorResponse($validator->errors(), 'validationError');
    }

    $newValues = $this->valWithUpdatedBy($validator->validated());
    if ($model = $this->model::find($id)) {
      $model->users()->sync($this->getIds($newValues['users']));
      return $this->goodResponse(true);
    }
    return $this->emptyModel();
  }
}
