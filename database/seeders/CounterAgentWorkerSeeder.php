<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CounterAgentWorkerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //
    DB::table('counter_agent_workers')->insert(
      [
        [
          'name' => 'Терентьев Сергей Вячеславович',
          'name_short' => 'Терентьев С.В.',
          'phone' => '+7 921 955 33 92',
          'position' => '',
        ],
        [
          'name' => 'Николай',
          'name_short' => 'Николай',
          'position' => 'главный АСУшник СПП',
          'phone' => '+7 965 987 30 07',
        ],
        [
          'name' => 'Геннадий',
          'name_short' => 'Геннадий',
          'phone' => '+7 911 743 62 95',
          'position' => '',
        ],
        [
          'name' => 'Ченуров Алексей Викторович',
          'name_short' => 'Ченуров А.В.',
          'phone' => '+7 910 791 38 63',
          'position' => '',
        ]
      ]
    );
    DB::table('counter_agent_counter_agent_worker')->insert(
      [
        [
          'counter_agent_id' => 1,
          'counter_agent_worker_id' => 1
        ],
        [
          'counter_agent_id' => 2,
          'counter_agent_worker_id' => 2
        ]
      ]
    );
  }
}
