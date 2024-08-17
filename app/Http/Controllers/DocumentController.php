<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Carbon\Carbon;

class DocumentController extends Controller
{
  protected $model;

  public function __construct(Document $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Document', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['timelines', 'stages', 'files', 'chapter.subgroup.direction.project','executor']);
  }

  public function update(int $id, Request $request)
  {
    $newValues = $this->valWithUpdatedBy($request->all());
    if (isset($newValues['document_status_id'])) {
      $newValues['last_status_change'] = Carbon::now();
    }

    if ($model = $this->model::find($id)) {
      $model->update($newValues);
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
    if (isset($newValues['document_status_id'])) {
      $newValues['last_status_change'] = Carbon::now();
    }
    if ($this->model::create($newValues)) {
      return $this->goodResponse(true);
    }
    return $this->emptyModel();
  }
}
