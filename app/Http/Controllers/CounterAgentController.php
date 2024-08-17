<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CounterAgent;

class CounterAgentController extends Controller
{

  protected $model;
  protected $with = ['counterAgentWorkers'];

  public function __construct(CounterAgent $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\CounterAgent', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with($this->with)->get();
  }

  public function select()
  {
    return $this->defaultSelect($this->model);
  }

  public function filteredWorkers(int $id)
  {
    return $this->goodResponse($this->model::find($id)->forSelectWorkers()->get());
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
