<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subgroup;
use App\Models\Chapter;
use App\Models\Document;

class SubgroupController extends Controller
{
  protected $model;

  public function __construct(Subgroup $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Subgroup', ['only' => ['update', 'store']]);
    $this->model = $model;
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
