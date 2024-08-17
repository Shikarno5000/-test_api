<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class InternalMeeting extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'date',
    'place',
    'organizer_id'
  ];

  public $rules = [
    'date' => 'required|date',
    'place' => 'required|string|max:100',
    'organizer_id' => 'nullable|numeric',
    'users' => ''
  ];

  public function organizer()
  {
    return $this->belongsTo(User::class);
  }

  public function users()
  {
    return $this->belongsToMany(User::class);
  }
  public function questions()
  {
    return $this->hasMany(Question::class);
  }

}
