<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratio extends Model
{
  use HasFactory;

  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'element_id'
  ];

  public $rules = [
    'name' => 'required|string|max:20',
    'element_id' => 'required|numeric'
  ];

  public function element()
  {
    return $this->belongsTo(Element::class);
  }
}
