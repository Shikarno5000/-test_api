<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementCode extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'element_id',
      'code',
      'weight_per_unit',
      'type_operation_id',
      'ip_id',
      'ex_id'
    ];

  public $rules = [
    'element_id' => 'numeric',
    'code' => 'required|string|max:50',
    'weight_per_unit' => 'nullable|numeric',
    'type_operation_id' => 'nullable|numeric',
    'ip_id' => 'nullable|numeric',
    'ex_id' => 'nullable|numeric'
  ];
}
