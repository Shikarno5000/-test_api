<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class ElementController extends Controller
{
  protected $model;

  public function __construct(Element $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Element', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->goodResponse($this->model::with('files')->get());
  }
  public function select()
  {
    $data = $this->model::select(['id','name', 'article', 'element_type_id'])->get();
    $result = [];
    foreach ($data as &$arr) {
      $result[] = [
          'id' => $arr['id'],
          'element_type_id' => $arr['element_type_id'],
          'name' => $arr['article'] . ' «' . $arr['name'] . '»'
      ];
    }
    return $result;
  }
  public function allArticles()
  {
    return $this->goodResponse($this->model::select(['id','article'])->get());
    // $result = $this->model::select(['article'])->get();
    // $allArticles = [];
    // foreach ($result as &$arr) {
    //   if($arr['article'] !== '') $allArticles[] = $arr['article'];
    // }
  }

  public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['elementCodes','files']);
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

  public function addArray(Request $request)
  {
    try {
      foreach ($request->all() as $values) {
        $this->model::create($this->valWithCreatedBy($values));
      }
      return $this->goodResponse(true);
    } catch (\Illuminate\Database\QueryException $e) {
      $errorInfo = $e->errorInfo;
      return $this->errorResponse($errorInfo[2], 'Ошибка добавления в базу');
    }
  }
}
