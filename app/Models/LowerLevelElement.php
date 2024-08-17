<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowerLevelElement extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'col',
    'element_id',
    'lower_level_id',
    'position',
    'comment'
  ];

  public $rules = [
    'element_id' => 'required|numeric',
    'lower_level_id' => 'numeric',
    'col' => 'nullable|numeric',
    'position' => 'nullable|string|max:50',
    'comment' => 'nullable|string|max:250'
  ];

  public function element()
  {
    return $this->belongsTo(Element::class);
  }
}
