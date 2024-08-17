<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'description',
    'internal_meeting_id',
  ];

  public $rules = [
    'name' => 'required|string|max:250',
    'internal_meeting_id' => 'numeric',
    'description' => 'nullable|string',
  ];

  public function offers()
  {
    return $this->hasMany(Offer::class);
  }
  public function decisions()
  {
    return $this->hasMany(Decision::class);
  }
  public function internalMeeting()
  {
    return $this->belongsTo(InternalMeeting::class);
  }
}
