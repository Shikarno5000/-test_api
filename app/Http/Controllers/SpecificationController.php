<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specification;

class SpecificationController extends Controller
{
    protected $model;

  public function __construct(Specification $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Specification', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->goodResponse($this->model::get());
  }

  public function select()
  {
    $data = $this->model::select(['id','article', 'description'])->get();
    $result = [];
    foreach ($data as &$arr) {
      $result[] = [
          'id' => $arr['id'],
          'name' => $arr['article'] . ' «' . $arr['description'] . '»'
      ];
    }
    return $result;
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

  public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['counterAgent', 'contract', 'files', 'products', 'servers', 'lowerLevels', 'chapterElements', 'chapterPlks', 'chapterSoftware', 'stages']);
  }
}
