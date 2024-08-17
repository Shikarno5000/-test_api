<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'contract_id',
      'name',
      'code',
      'date'
    ];

    public $rules = [
      'contract_id' => 'numeric',
      'name' => 'required|string|max:200',
      'code' => 'required|string|max:100',
      'date' => 'nullable|date'
    ];

    public $store = [
      'contract_id' => 'numeric',
      'name' => 'required|string|max:200',
      'code' => 'required|string|max:100',
      'date' => 'nullable|date'
    ];
    public $update = [
      'name' => 'required|string|max:200',
      'code' => 'required|string|max:100',
      'date' => 'nullable|date'
    ];


    public function files()
    {
      return $this->belongsToMany(File::class);
    }

}
