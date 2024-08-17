<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Subgroup;
use App\Models\Chapter;
use App\Models\Document;

class DirectionController extends Controller
{
  protected $model;

  public function __construct(Direction $model)
  {
    $this->middleware('auth:api');
    $this->middleware('requestValidation:App\Models\Direction', ['only' => ['update', 'store']]);
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

  // добавление стандартного раздала АТХ в ПД
  public function pd(int $id)
  {
    $model = $this->model::find($id);
    $subgroup = new Subgroup(['name' => 'ATX']);
    $model->subgroups()->save($subgroup);
    $chapter = new Chapter (['name' => 'Состав тома', 'chapter_type_id' => 1]);
    $subgroup->chapters()->save($chapter);
    $chapter->documents()->saveMany([
      new Document(['name' => 'Титульный лист', 'sort' => 10]),
      new Document(['name' => 'Содержание тома', 'sort' => 20, 'suffix' => 'С']),
      new Document(['name' => 'Пояснительная записка', 'sort' => 30, 'suffix' => 'ПЗ']),
      new Document(['name' => 'Схема структурная КТС', 'sort' => 40, 'suffix' => 'С1']),
      new Document(['name' => 'Схема функциональная автоматизации', 'sort' => 50, 'suffix' => 'С2']),
      new Document(['name' => 'План расположения оборудования и прокладки кабельных трасс', 'sort' => 60, 'suffix' => 'С3']),
      new Document(['name' => 'Спецификация оборудования, изделий и материалов', 'sort' => 70, 'suffix' => 'С0']),
      new Document(['name' => 'Перечень сигналов', 'sort' => 80, 'suffix' => 'ПС'])
    ]);
    return $this->goodResponse(true);
  }
  // добавление стандартного раздала АТХ в РД
  public function rd(int $id)
  {
    $model = $this->model::find($id);
    $subgroup = new Subgroup(['name' => 'Номер цеха']);
    $model->subgroups()->save($subgroup);
    $chapter = new Chapter (['name' => 'АТХ', 'chapter_type_id' => 1]);
    $subgroup->chapters()->save($chapter);
    $chapter->documents()->saveMany([
      new Document(['name' => 'Титульный лист', 'sort' => 10]),
      new Document(['name' => 'Общие данные', 'sort' => 20]),
      new Document(['name' => 'Схема структурная КТС', 'sort' => 30]),
      new Document(['name' => 'Схема функциональная автоматизации', 'sort' => 40]),
      new Document(['name' => 'План расположения оборудования и прокладки кабельных трасс', 'sort' => 50]),
      new Document(['name' => 'Кабельный журнал', 'sort' => 60]),
      new Document(['name' => 'Перечень сигналов', 'sort' => 70, 'suffix' => 'ПС']),
      new Document(['name' => 'Спецификация оборудования, изделий и материалов', 'sort' => 80, 'suffix' => 'С0'])
    ]);
    return $this->goodResponse(true);
  }

}
