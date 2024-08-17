<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CounterAgentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('counter_agents')->insert(
      [
        [
          'name' => 'ГрПП',
          'name_short' => 'ГрПП',
          'counter_agent_role_id' => 1,
          'inn' => 1111
        ],
        [
          'name' => 'Триотехника',
          'name_short' => 'Триотехника',
          'counter_agent_role_id' => 1,
          'inn' => 1111
        ],
        [
          'name' => 'Провита',
          'name_short' => 'Провита',
          'counter_agent_role_id' => 1,
          'inn' => 1111
        ]
      ]
    );


    DB::table('counter_agents')->insert(
      [
        [
          'name' => 'РУСАВТОМАТИКА',
          'name_short' => 'РУСАВТОМАТИКА',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'ОВЕН-Автоматизация',
          'name_short' => 'ОВЕН-Автоматизация',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Ситилинк',
          'name_short' => 'Ситилинк',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Электротехмонтаж',
          'name_short' => 'Электротехмонтаж',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Интеграция.Про',
          'name_short' => 'Интеграция.Про',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'ЦЕНТРЭНЕРГОПРИБОР',
          'name_short' => 'ЦЕНТРЭНЕРГОПРИБОР',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'ТИНКО',
          'name_short' => 'ТИНКО',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'ЭЛРУС',
          'name_short' => 'ЭЛРУС',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'КОМПЭЛ',
          'name_short' => 'КОМПЭЛ',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Матрикс',
          'name_short' => 'Матрикс',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'ВсеИнструменты',
          'name_short' => 'ВсеИнструменты',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Привод Плюс',
          'name_short' => 'Привод Плюс',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'ИП Решетник',
          'name_short' => 'ИП Решетник',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'КИП-Сервис',
          'name_short' => 'КИП-Сервис',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Чип и Дип',
          'name_short' => 'Чип и Дип',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'ЭТМ',
          'name_short' => 'ЭТМ',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Промэлектро',
          'name_short' => 'Промэлектро',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Инстарт',
          'name_short' => 'Инстарт',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
        [
          'name' => 'Прибор плюс',
          'name_short' => 'Прибор плюс',
          'counter_agent_role_id' => 2,
          'inn' => 1111
        ],
      ]
    );
  }
}
