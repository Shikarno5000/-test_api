<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Project extends BaseModel
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'name_short',
    'project_type_id',
    'cipher_prefix',
    'responsible_executor_id',
    'object_description',
    'archive',
    'contract_id',
    'sort',
  ];


  public $rules = [
    'name' => 'required|string|max:250',
    'name_short' => 'required|string|max:20',
    'project_type_id' => 'required|numeric',
    'cipher_prefix' => 'nullable|string|max:25',
    'responsible_executor_id' => 'nullable|numeric',
    'object_description' => 'nullable|string|max:250',
    'archive' => 'nullable|boolean',
    'contract_id' => 'nullable|numeric',
    'sort' => 'nullable|numeric',
    'contracts' => ''
  ];

  protected $casts = [
    'archive' => 'boolean',
  ];

  public function status()
  {
    return $this->belongsToMany(Stage::class)->where(['checked' => 1])->orderBy('sort', 'desc')->select(['name']);
  }
  public function totalEntranceAndExpenditure()
  {
    return $this->belongsToMany(Timeline::class)->where('entrance', '!=', null)->orWhere('expenditure', '!=', null)->select(['entrance', 'expenditure']);
  }
  public function directions()
  {
    return $this->hasMany(Direction::class)->orderBy('sort','asc');
  }
  public function contracts()
  {
    return $this->belongsToMany(Contract::class);
  }
  public function subgroups()
  {
    return $this->hasMany(Subgroup::class)->with('chapters');
  }
  public function files()
  {
    return $this->belongsToMany(File::class);
  }
  public function contract()
  {
    return $this->belongsTo(Contract::class);
  }
  public function responsibleExecutor()
  {
    return $this->belongsTo(User::class)->select(['id', 'email', "name", "name_short", "birth_date", "phone", 'phone_internal', 'comment', "department_id", 'user_role_id', "user_status_id", "position_id"]);
  }


  // ниже не проверено

  public function users()
  {
    return $this->belongsToMany(User::class)->orderBy('name');
  }
  public function participants()
  {
    return $this->hasMany(Participant::class)->with('counterAgentWorkers');
  }
  public function timelines()
  {
    return $this->belongsToMany(Timeline::class)->orderBy('date', 'desc')->orderBy('id', 'desc');
  }
  public function stages()
  {
    return $this->belongsToMany(Stage::class)->orderBy('sort', 'asc');
  }
  public function productTimelines()
  {
    return $this->hasManyThrough(Product::class, Chapter::class);
  }
  public function documentTimelines()
  {
    return $this->hasManyThrough(Document::class, Chapter::class);
  }
}
