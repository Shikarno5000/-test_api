<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('directions')->insert([
      ['name' => 'Проектная документация', 'name_short' => 'ПД', 'project_type_id' => 1],
      ['name' => 'Рабочая документация', 'name_short' => 'РД', 'project_type_id' => 1],
      ['name' => 'Проектная модель', 'name_short' => 'ПМ', 'project_type_id' => 2],
      ['name' => 'Строительная модель', 'name_short' => 'СМ', 'project_type_id' => 2],
      ['name' => 'Исполнительная модель', 'name_short' => 'ИМ', 'project_type_id' => 2],
      ['name' => 'Эксплуатационная модель', 'name_short' => 'ЭМ', 'project_type_id' => 2],
      ['name' => 'Площадные объекты', 'name_short' => 'Площадные', 'project_type_id' => 3],
      ['name' => 'Литейные объекты', 'name_short' => 'Литейные', 'project_type_id' => 3],
      ['name' => 'Сооружения', 'name_short' => 'Сооружения', 'project_type_id' => 4],
      ['name' => 'Производство', 'name_short' => 'Производство', 'project_type_id' => 5],
      ['name' => 'Продажа', 'name_short' => 'Продажа', 'project_type_id' => 5],
      ['name' => 'ОКР', 'name_short' => 'ОКР', 'project_type_id' => 6],
      // ['name' => 'Шкафы управления', 'name_short' => 'ШУ', 'project_type_id' => 5],
      // ['name' => 'Датчики полевого уровня', 'name_short' => 'ДПУ', 'project_type_id' => 5],
      // ['name' => 'Контроллеры', 'name_short' => 'ПЛК', 'project_type_id' => 5]
    ]);
  }
}


// { id: 1, name: 'Проектно-изыскательские работы', name_short: 'ПИР' },
// { id: 2, name: 'Подготовка информационной модели', name_short: 'ТИМ' },
// { id: 3, name: 'Строительно-монтажные работы', name_short: 'СМР' },
// { id: 4, name: 'Пусконаладочные работы', name_short: 'ПНР' },
// { id: 5, name: 'Поставка оборудования', name_short: 'ПОСТ' },
// { id: 6, name: 'Опытно-конструкторская разработка', name_short: 'ОКР' },
// { id: 7, name: 'Разработка ПО', name_short: 'ПО' }