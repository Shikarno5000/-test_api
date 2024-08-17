<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
  protected $model;

  public function __construct(Contract $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Contract', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with(['counterAgent','counterAgentWorker', 'responsibleExecutor'])->get();
  }

  public function select()
  {
     $result = $this->model::select(['id', 'code', 'date', 'object_name'])->orderBy('code')->get();
    // приводим к стандартному id name
        foreach ($result as &$arr) {
          $arr["name"] = "№ {$arr['code']} от {$arr['date']} ({$arr['object_name']})";
          unset($arr['code']);
        }

    return $result;
  }

  public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['files','counterAgent','counterAgentWorker', 'projects', 'applications', 'specifications', 'letters', 'responsibleExecutor']);
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
