<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterAgentWorker extends BaseModel
{
  use HasFactory;

  // public $timestamps = false;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'name_short',
    'email',
    'phone',
    'position',
    'comment',
  ];

  public $rules = [
    'name' => 'required|string|max:50',
    'name_short' => 'required|string|max:25',
    'email' => 'nullable|email|max:50',
    'phone' => 'nullable|string|max:20',
    'position' => 'nullable|string|max:50',
    'comment' => 'nullable|string|max:200',
    'counter_agents' => ''
  ];



  public function counterAgents()
  {
    return $this->belongsToMany(CounterAgent::class);
  }
}
