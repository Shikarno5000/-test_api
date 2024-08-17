<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerElement extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'element_id',
    'server_id',
    'col',
    'position',
    'comment'
  ];

  public $rules = [
    'element_id' => 'numeric',
    'server_id' => 'numeric',
    'col' => 'nullable|numeric',
    'position' => 'nullable|string|max:50',
    'comment' => 'nullable|string|max:250'
  ];

  public function element()
  {
    return $this->belongsTo(Element::class);
  }
}
