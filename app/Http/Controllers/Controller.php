<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;


  // отправка ошибки
  public static function errorResponse($data, $errorType = '', $errorCode = '')
  {
    return response()->json([
      'success' => false,
      'error' => [
        'type' => $errorType,
        'code' => $errorCode,
        'msg' => $data
      ]
    ], 200);
  }
  // отправляем хороший ответ
  public static function goodResponse($data)
  {
    return response()->json([
      'success' => true,
      'data' => $data
    ], 200);
  }

  public static function emptyModel()
  {
    return response()->json([
      'success' => false,
      'error' => [
        'type' => 'emptyModel',
        'code' => 403,
        'msg' => 'Сущность не найдена'
      ]
    ], 200);
  }
  public static function emptyRequest()
  {
    return response()->json([
      'success' => false,
      'error' => [
        'type' => 'emptyRequest',
        'code' => 403,
        'msg' => 'Нет изменений'
      ]
    ], 200);
  }
  // стандартное изменение
  public function defaultUpdate($id, $model, $values)
  {
    if ($localModel = $model::find($id)) {
      return $localModel->update($this->valWithUpdatedBy($values));
    }
    return response()->json('Сущность не найдена',404);
  }
  // стандартное удаление
  public function defaultDelete($id, $model)
  {
    if ($localModel = $model::find($id)) {
      return $localModel->delete();
    }
    return response()->json('Сущность не найдена',404);
  }
  // стандартный вывод элемента
  public function defaultShow($id, $model, $with)
  {
    if($data = $model::with($with)->find($id)) {
      return $data;
    };
    return response()->json('Сущность не найдена',404);
  }

  // стандартное добавление
  public function defaultStore($model, $values)
  {
    return $model::create($this->valWithCreatedBy($values));
  }
  // стандартное покетное изменение
  public function defaultBatchEditing($model, $values)
  {
    foreach ($values['ids'] as $id) {
      if ($locModel = $model::find($id)) {
        if ($values['code'] === 'deleteAllIds') {
          $locModel->delete();
        }
        else {
          $line = [];
          $line[$values['code']] = $values['value'];
          $line['updated_by'] = Auth::user()->id;
          $locModel->update($line);
        }
      }
    }
    return $this->goodResponse(true);
  }
  // стандартное select
  public function defaultSelect($model, $name = 'name', $forFilter = false)
  {
    $select = ['id', $name];
    if ($forFilter) {
      $select[] = $forFilter;
    }
    $data = $model::select($select)->orderBy($name)->get();
    // приводим к стандартному id name
    $result = [];
    foreach ($data as &$arr) {
      $result[] = [
          'id' => $arr['id'],
          'name' => $arr[$name]
      ];
    }
    return $result;
  }
  // получение списка id
  public function getIds($values)
  {
    $ids = [];
    if (isset($values)) {
      foreach ($values as $item) {
        $ids[] = $item['id'];
      }
    }
    return $ids;
  }
  // Добавление кто сделал
  public function valWithCreatedBy($values)
  {
    $values['created_by'] = Auth::user()->id;
    return $values;
  }
  // Добавление кто сделал
  public function valWithUpdatedBy($values)
  {
    $values['updated_by'] = Auth::user()->id;
    return $values;
  }
}
