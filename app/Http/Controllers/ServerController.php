<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServerController extends Controller
{
  protected $model;

  public function __construct(Server $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Server', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->goodResponse($this->model::with('files')->get());
  }

  public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['files', 'serverElements', 'timelines', 'stages', 'chapter.subgroup.direction.project', 'specification.contract']);
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
