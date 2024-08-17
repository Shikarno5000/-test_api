<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'date',
    'code',
    'content',
    'applications',
    'executor_id',
    'notes'
  ];

  public $rules = [
    'date' => 'required|date',
    'code' => 'required|string|max:25',
    'content' => 'nullable|string|max:250',
    'applications' => 'nullable|string|max:250',
    'executor_id' => 'nullable|numeric',
    'notes' => 'nullable|string|max:250'
  ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }
  public function executor()
  {
    return $this->belongsTo(User::class)->select(['id', 'email', "name", "name_short", "birth_date", "phone", 'phone_internal', 'comment', "department_id", 'user_role_id', "user_status_id", "position_id"]);
  }
}
