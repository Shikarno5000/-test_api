<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Decision extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'description',
    'responsible_id',
    'date',
    'decision_status_id',
    'question_id'
  ];

  public $rules = [
    'description' => 'required|string',
    'responsible_id' => 'required|numeric',
    'date' => 'nullable|date',
    'decision_status_id' => 'nullable|numeric',
    'question_id' => 'numeric'
  ];

  public function responsible()
  {
    return $this->belongsTo(User::class);
  }
}
