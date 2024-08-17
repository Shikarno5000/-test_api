<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  protected $model;

  public function __construct(User $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\User', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with(['position'])->get();
  }
  public function user()
  {
    return Auth::user();
  }

  public function select()
  {
    return $this->defaultSelect($this->model, 'name_short');
  }

  public function update(int $id, Request $request)
  {
    if ($model = $this->model::find($id)) {
      $values = $this->valWithUpdatedBy($request->all());
      if (isset($values['password'])) $values['password'] = Hash::make($values['password']);
      return $model->update($values);
    }
    return response()->json('Сущность не найдена',404);
  }

  public function delete(int $id)
  {
    return $this->defaultDelete($id, $this->model);
  }

  public function store(Request $request)
  {
    $values = $this->valWithCreatedBy($request->all());
    $values['password'] = Hash::make($values['password']);
    $values['settings'] = [];
    if ($model = $this->model::create($values)) {
      return true;
    }
    return response()->json('Сущность не найдена',404);
  }


  public function updateSettings( Request $request)
  {
    try {
      // получение новых значений
      $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'value' => 'required',
      ]);
      if ($validator->fails()) {
        return $this->errorResponse($validator->errors(), 'validationError');
      }

      $newValues = $validator->validated();

      $settings = json_decode(Auth::user()->settings);
      // return $this->goodResponse($settings);
      $new = true;
      foreach ($settings as $setting) {
        if ($setting->name === $newValues['name']) {
          $setting->value = $newValues['value'];
          $new = false;
        }
      }
      if ($new) { $settings[] = $newValues; }

      // сохранение настроек
      $user = $this->model::find(Auth::user()->id);
      $user->update(['settings' => json_encode($settings)]);
      return true;
    } catch (\Illuminate\Database\QueryException $e) {
      $errorInfo = $e->errorInfo;
      return $this->errorResponse($errorInfo[2], 'Ошибка добавления в базу');
    }

    // return $this->defaultStore($this->model, $request->all());


    // return $this->defaultDelete($id, $this->model);
  }

}
