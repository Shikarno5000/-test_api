<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterAgent extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'name_short',
    'legal_address',
    'actual_address',
    'inn',
    'kpp',
    'ogrn',
    'okpo',
    'oktmo',
    'counter_agent_role_id',
  ];

  public $rules = [
    'name' => 'required|string|max:250',
    'name_short' => 'required|string|max:50',
    'legal_address' => 'nullable|string|max:250',
    'actual_address' => 'nullable|string|max:250',
    'inn' => 'required|string|max:30',
    'kpp' => 'nullable|string|max:30',
    'ogrn' => 'nullable|string|max:30',
    'okpo' => 'nullable|string|max:30',
    'oktmo' => 'nullable|string|max:30',
    'counter_agent_role_id' => 'nullable|numeric',
    'counter_agent_workers' => ''
  ];


  public function counterAgentWorkers()
  {
    return $this->belongsToMany(CounterAgentWorker::class);
  }
  public function forSelectWorkers()
  {
    return $this->belongsToMany(CounterAgentWorker::class)->select(['id','name', 'name_short']);
  }
}
