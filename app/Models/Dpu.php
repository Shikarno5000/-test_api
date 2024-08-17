<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dpu extends Model
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'name',
      'article',
      'weight_per_unit',
      'nds',
      'type_operation_id'
    ];

    public $rules = [
      'name' => 'required|string|max:250',
      'article' => 'required|string|max:100',
      'weight_per_unit' => 'nullable|numeric',
      'nds' => 'required|boolean',
      'type_operation_id' => 'required|nullable|numeric'
    ];

    protected $casts = [
      'nds' => 'boolean',
    ];

    public function files()
  {
    return $this->belongsToMany(File::class);
  }

}
