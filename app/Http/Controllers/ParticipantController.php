<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
  protected $model;

  public function __construct(Participant $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Participant', ['only' => ['update', 'store']]);
    $this->model = $model;
  }


  public function update(int $id, Request $request)
  {
    $newValues = $this->valWithUpdatedBy($request->all());
    if ($model = $this->model::find($id)) {
      $model->update($newValues);
      $model->counterAgentWorkers()->sync($this->getIds($newValues['counter_agent_workers']));
      return $this->goodResponse(true);
    }
    return $this->emptyModel();
  }

  public function delete(int $id)
  {
    return $this->defaultDelete($id, $this->model);
  }

  public function store(Request $request)
  {
    $newValues = $this->valWithCreatedBy($request->all());
    if ($model = $this->model::create($newValues)) {
      $model->counterAgentWorkers()->sync($this->getIds($newValues['counter_agent_workers']));
      return $this->goodResponse(true);
    }
    return $this->emptyModel();
  }
}
