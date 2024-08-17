<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suggestion extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'description',
    'link',
    'comment',
    'suggestion_status_id',
    'suggestion_type_id'
  ];

  public $rules = [
    'name' => 'required|string|max:250',
    'description' => 'required|string',
    'link' => 'nullable|string|max:250',
    'comment' => 'nullable|string|max:250',
    'suggestion_status_id' => 'nullable|numeric',
    'suggestion_type_id' => 'nullable|numeric'
  ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }
}
