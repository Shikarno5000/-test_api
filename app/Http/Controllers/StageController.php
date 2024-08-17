<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;
use Illuminate\Support\Facades\DB;

class StageController extends Controller
{
  protected $model;

  public function __construct(Stage $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Stage', ['only' => ['update', 'store']]);
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
    $newValues = $this->valWithCreatedBy($request->all());

    if ($model = $this->model::create($newValues)) {
      if ($newValues['to']['table'] === 'products') {
        DB::table('product_stage')->insert([
          'product_id' => $newValues['to']['id'],
          'stage_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'projects') {
        DB::table('project_stage')->insert([
          'project_id' => $newValues['to']['id'],
          'stage_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'documents') {
        DB::table('document_stage')->insert([
          'document_id' => $newValues['to']['id'],
          'stage_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'servers') {
        DB::table('server_stage')->insert([
          'server_id' => $newValues['to']['id'],
          'stage_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'lower-levels') {
        DB::table('lower_level_stage')->insert([
          'lower_level_id' => $newValues['to']['id'],
          'stage_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'specifications') {
        DB::table('specification_stage')->insert([
          'specification_id' => $newValues['to']['id'],
          'stage_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
    }
    return $this->goodResponse($newValues);
  }
}
