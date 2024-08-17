<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plk extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'article',
    'weight_per_unit',
    'nds_value_id',
    'type_operation_id',
    'plk_type_id',
    'not_our'
  ];

  public $rules = [
    'name' => 'required|string|max:250',
    'article' => 'required|string|max:100',
    'weight_per_unit' => 'nullable|numeric',
    'nds_value_id' => 'nullable|numeric',
    'type_operation_id' => 'nullable|numeric',
    'plk_type_id' => 'nullable|numeric',
    'not_our' => 'nullable|boolean',
  ];

  protected $casts = [
    'not_our' => 'boolean',
  ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }

  public function plkElements()
  {
    return $this->hasMany(PlkElement::class)->with('element');
  }
}
