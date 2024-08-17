<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TimelineController extends Controller
{
  protected $model;

  public function __construct(Timeline $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Timeline', ['only' => ['update', 'store']]);
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
        DB::table('product_timeline')->insert([
          'product_id' => $newValues['to']['id'],
          'timeline_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'projects') {
        DB::table('project_timeline')->insert([
          'project_id' => $newValues['to']['id'],
          'timeline_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'documents') {
        DB::table('document_timeline')->insert([
          'document_id' => $newValues['to']['id'],
          'timeline_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'servers') {
        DB::table('server_timeline')->insert([
          'server_id' => $newValues['to']['id'],
          'timeline_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
      if ($newValues['to']['table'] === 'lower-levels') {
        DB::table('lower_level_timeline')->insert([
          'lower_level_id' => $newValues['to']['id'],
          'timeline_id' => $model->id
        ]);
        return $this->goodResponse(true);
      }
    }
    return $this->goodResponse($newValues);
  }
}
