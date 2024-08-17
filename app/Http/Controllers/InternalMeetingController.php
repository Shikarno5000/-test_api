<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternalMeeting;

class InternalMeetingController extends Controller
{
  protected $model;

  public function __construct(InternalMeeting $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\InternalMeeting', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with('organizer','users')->get();
  }

  public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['organizer','users','questions']);
  }

  public function update(int $id, Request $request)
  {
    $newValues = $this->valWithUpdatedBy($request->all());
    if ($model = $this->model::find($id)) {
      $model->update($newValues);
      if(isset($newValues['users'])) {
        $model->users()->sync($this->getIds($newValues['users']));
      }
      return true;
    }
    return response()->json('Сущность не найдена',404);
  }

  public function delete(int $id)
  {
    return $this->defaultDelete($id, $this->model);
  }

  public function store(Request $request)
  {
    $newValues = $this->valWithCreatedBy($request->all());
    if ($model = $this->model::create($newValues)) {
      $model->users()->sync($this->getIds($newValues['users']));
      return $this->goodResponse(true);
    }
    return $this->emptyModel();
  }
}
