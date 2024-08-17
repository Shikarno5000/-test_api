<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends BaseModel
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
    'text',
    'event_id',
    'entrance',
    'expenditure',
    'description',
    'date',
  ];

  public $rules = [
    'text' => 'required|string|max:250',
    'event_id' => 'nullable|numeric',
    'entrance' => 'nullable|numeric',
    'expenditure' => 'nullable|numeric',
    'description' => 'nullable|string',
    'date' => 'required|date',
    'to' => ''
  ];

}
