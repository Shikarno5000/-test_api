<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'checked',
    'sort',
  ];

  public $rules = [
    'name' => 'string|max:100',
    'checked' => 'nullable|boolean',
    'class' => 'nullable|string',
    'to' => ''
  ];


  protected $casts = [
    'checked' => 'boolean',
  ];
}
