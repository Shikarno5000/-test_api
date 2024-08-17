<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'date',
    'code',
    'contract_status_id',
    'responsible_executor_id',
    'counter_agent_id',
    'counter_agent_worker_id',
    'subject_contract',
    'term_of_agreement',
    'contract_type_id',
    'pricing_type_id',
    'price',
    'notes',
    'execution_percentage',
    'object_name'
  ];

  public $rules = [
    'date' => 'required|date',
    'code' => 'required|string|max:50',
    'contract_status_id' => 'numeric',
    'responsible_executor_id' => 'nullable|numeric',
    'counter_agent_id' => 'nullable|numeric',
    'counter_agent_worker_id' => 'nullable|numeric',
    'subject_contract' => 'nullable|string|max:250',
    'term_of_agreement' => 'nullable|date',
    'contract_type_id' => 'nullable|numeric',
    'pricing_type_id' => 'nullable|numeric',
    'price' => 'nullable|numeric',
    'notes' => 'nullable|string|max:50',
    'object_name' => 'nullable|string|max:250',
    'execution_percentage' => 'nullable|numeric',
  ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }
  public function applications()
  {
    return $this->hasMany(Application::class)->with('files');
  }
  public function specifications()
  {
    return $this->hasMany(Specification::class)->with('counterAgent');
  }
  public function counterAgent()
  {
    return $this->belongsTo(CounterAgent::class);
  }
  public function counterAgentWorker()
  {
    return $this->belongsTo(CounterAgentWorker::class);
  }
  public function projects()
  {
    return $this->hasMany(Project::class);
  }
  public function letters()
  {
    return $this->hasMany(Letter::class);
  }
  public function responsibleExecutor()
  {
    return $this->belongsTo(User::class)->select(['id', 'email', "name", "name_short", "birth_date", "phone", 'phone_internal', 'comment', "department_id", 'user_role_id', "user_status_id", "position_id"]);
  }
}
