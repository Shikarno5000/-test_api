<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CounterAgentWorker;

class CounterAgentWorkerController extends Controller
{

  protected $model;
  protected $with = ['counterAgents'];

  //
  public function __construct(CounterAgentWorker $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\CounterAgentWorker', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with($this->with)->get();
  }

  public function select()
  {
    $items = $this->model::select(['id', 'name'])->orderBy('name')->with(['counterAgents:id'])->get()->toArray();
    foreach ($items as &$item) {
      $item['counter_agent_ids'] = $this->getIds($item['counter_agents']);
      unset($item['create_update']);
      unset($item['counter_agents']);
    }
    return $items;
  }

  public function update(int $id, Request $request)
  {
    $newValues = $this->valWithUpdatedBy($request->all());
    if ($model = $this->model::find($id)) {
      $model->update($newValues);
      $model->counterAgents()->sync($this->getIds($newValues['counter_agents']));
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
      $model->counterAgents()->sync($this->getIds($newValues['counter_agents']));
      return $this->goodResponse(true);
    }
    return $this->emptyModel();
  }
}
