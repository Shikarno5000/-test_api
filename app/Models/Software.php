<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'name',
      'article',
      'nds_value_id',
      'type_operation_id'
    ];

    public $rules = [
      'name' => 'required|string|max:250',
      'article' => 'required|string|max:100',
      'nds_value_id' => 'nullable|numeric',
      'type_operation_id' => 'nullable|numeric'
    ];


    public function files()
    {
      return $this->belongsToMany(File::class);
    }

}
