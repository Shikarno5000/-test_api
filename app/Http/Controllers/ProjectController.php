<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
  protected $model;

  public function __construct(Project $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Project', ['only' => ['update', 'store']]);
    $this->model = $model;
  }

  public function index()
  {
    return $this->model::with(['status', 'totalEntranceAndExpenditure','directions', 'contract'])->get();
  }

  public function select()
  {
    return $this->defaultSelect($this->model, 'name_short');
  }

  public function show(int $id)
  {
    return $this->defaultShow($id, $this->model, ['participants.counterAgent', 'users', 'timelines', 'stages', 'directions.subgroups.chapters', 'directions.project', 'contract', 'files', 'responsibleExecutor', 'contracts']);
  }
  public function elements(int $id)
  {
    return $this->model::with(['directions.subgroups.chapterWithElements'])->find($id);
  }

  // TODO: удалить
  // public function editUsers(int $id, Request $request)
  // {
  //   if (count($request->all()) === 0) {
  //     return $this->emptyRequest();
  //   }
  //   $validator = Validator::make($request->all(), ['users' => '']);
  //   if ($validator->fails()) {
  //     return $this->errorResponse($validator->errors(), 'validationError');
  //   }

  //   $newValues = $this->valWithUpdatedBy($validator->validated());
  //   if ($model = $this->model::find($id)) {
  //     $model->users()->sync($this->getIds($newValues['users']));
  //     return $this->goodResponse(true);
  //   }
  //   return $this->emptyModel();
  // }

  public function batchEditing(Request $request)
  {
    return $this->defaultBatchEditing($this->model, $request->all());
  }

  public function update(int $id, Request $request)
  {
    $newValues = $this->valWithUpdatedBy($request->all());
    if ($model = $this->model::find($id)) {
      $model->update($newValues);
      $model->contracts()->sync($this->getIds($newValues['contracts']));
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

    if ($model = $this->model::create($newValues)) {

      function buildStages($values)
      {
        $result = [];
        $sort = 0;
        foreach ($values as $value) {
          $result[] = [
            'created_by' => Auth::user()->id,
            'name' => $value,
            'checked' => 0,
            'sort' => $sort
          ];
          $sort += 50;
        }
        return $result;
      }

      // Добавление этапов по умолчанию
      if ($newValues['project_type_id'] === 1) {
        $values = [
          'Получение исходных данных для оценки проекта',
          'Выдача ТКП',
          'Согласование ТКП',
          'Передача проекта договора',
          'Заключение договора',
          'Получение аванса',
          'Получение исходных данных для проектирования',
          'Передача ПД Заказчику',
          'Согласование ПД Заказчиком',
          'Передача РД Заказчику',
          'Согласование РД',
          'Подписание акта выполненных работ',
          'Окончательный расчет'
        ];
        $model->stages()->createMany(buildStages($values));
      }
      if ($newValues['project_type_id'] === 2) {
        $values = [
          'Получение исходных данных для оценки проекта',
          'Выдача ТКП',
          'Согласование ТКП',
          'Передача проекта договора',
          'Заключение договора',
          'Получение аванса',
          'Получение исходных данных для моделирования',
          'Передача моделей Заказчику',
          'Согласование моделей',
          'Подписание акта выполненных работ',
          'Окончательный расчет'
        ];
        $model->stages()->createMany(buildStages($values));
      }

      if ($newValues['project_type_id'] === 5) {
        $values =  [
          'Выдача ТКП',
          'Согласование ТКП',
          'Передача проекта договора',
          'Заключение договора',
          'Получение аванса',
          'Передача КД Заказчику',
          'Согласование КД',
          'Передача КД на производство',
          'Сборка оборудования',
          'Передача оборудования Заказчику',
          'Подписание приемо-передаточных документов',
          'Окончательный расчет'
        ];
        $model->stages()->createMany(buildStages($values));
      }
      $model->contracts()->sync($this->getIds($newValues['contracts']));
      return $this->goodResponse($model);
    }
    return $this->emptyModel();
  }
}
