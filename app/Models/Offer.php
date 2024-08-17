<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'description',
    'author_id',
    'question_id'
  ];

  public $rules = [
    'description' => 'required|string',
    'author_id' => 'required|numeric',
    'question_id' => 'numeric'
  ];

  public function author()
  {
    return $this->belongsTo(User::class);
  }
}
