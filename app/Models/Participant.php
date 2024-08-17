<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'counter_agent_id',
    'participant_type_id',
    'project_id',
    'comment',
  ];

  public $rules = [
    'counter_agent_id' => 'required|numeric',
    'participant_type_id' => 'required|numeric',
    'project_id' => 'numeric',
    'comment' => 'nullable|string|max:100',
    'counter_agent_workers' => '',
  ];



  public function counterAgentWorkers()
  {
    return $this->belongsToMany(CounterAgentWorker::class);
  }
  public function counterAgent()
  {
    return $this->belongsTo(CounterAgent::class);
  }
}
