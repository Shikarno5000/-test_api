<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends BaseModel
{
  use HasFactory;

  // public $timestamps = false;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'article',
    'weight_per_unit',
    'nds_value_id',
    'unit_id',
    'type_operation_id',
    'element_type_id',
    'element_for_type_id',
    'order_code_id',
    'manufacturer',
    'ip_id',
    'ex_id'
  ];

  public $rules = [
    'name' => 'required|string|max:250',
    'article' => 'required|string|max:100',
    'weight_per_unit' => 'nullable|numeric',
    'unit_id' => 'nullable|numeric',
    'nds_value_id' => 'nullable|numeric',
    'type_operation_id' => 'nullable|numeric',
    'element_type_id' => 'required|nullable|numeric',
    'element_for_type_id' => 'nullable|numeric',
    'order_code_id' => 'nullable|numeric',
    'manufacturer' => 'nullable|string|max:50',
    'ip_id' => 'nullable|numeric',
    'ex_id' => 'nullable|numeric'
  ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }
  public function prices()
  {
    return $this->hasMany(ElementPrice::class)->with(['counterAgent' => function ($query) {
      $query->select('id', 'name');
    }]);
  }
  public function elementCodes()
  {
    return $this->hasMany(ElementCode::class);
  }
}
