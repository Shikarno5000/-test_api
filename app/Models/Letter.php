<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'date',
    'code',
    'letter_direction_id',
    'letter_type_id',
    'organization',
    'fio',
    'shipping_method_id',
    'delivery_email',
    'delivery_address',
    'content',
    'applications',
    'executor_id',
    'contract_id',
    'incoming_letter_date',
    'incoming_letter_code',
    'response_to_id',
    'execute_before',
    'execution_date',
    'notes'
  ];

  public $rules = [
    'date' => 'required|date',
    'code' => 'required|string|max:50',
    'letter_direction_id' => 'numeric',
    'letter_type_id' => 'numeric',
    'organization' => 'string|max:200',
    'fio' => 'string|max:200',
    'shipping_method_id' => 'nullable|numeric',
    'delivery_email' => 'nullable|string|max:250',
    'delivery_address' => 'nullable|string|max:250',
    'content' => 'nullable|string|max:250',
    'applications' => 'nullable|string|max:250',
    'executor_id' => 'nullable|numeric',
    'contract_id' => 'nullable|numeric',
    'incoming_letter_date' => 'nullable|date',
    'incoming_letter_code' => 'nullable|string|max:50',
    'response_to_id' => 'nullable|numeric',
    'execute_before' => 'nullable|date',
    'execution_date' => 'nullable|date',
    'notes' => 'nullable|string|max:250'
  ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }

  public function contract()
  {
    return $this->belongsTo(Contract::class)->select(['id','code']);
  }
  public function responseTo()
  {
    return $this->belongsTo(Letter::class, 'response_to_id')->select(['id','code']);
  }
  public function executor()
  {
    return $this->belongsTo(User::class)->select(['id', 'email', "name", "name_short", "birth_date", "phone", 'phone_internal', 'comment', "department_id", 'user_role_id', "user_status_id", "position_id"]);
  }

}
