<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'chapter_id',
    'name',
    'article',
    'nds_value_id',
    'type_operation_id',
    'specification_id',
    'col'
  ];

  public $rules = [
    'chapter_id' => 'numeric',
    'name' => 'required|string|max:250',
    'article' => 'required|string|max:100',
    'nds_value_id' => 'nullable|numeric',
    'type_operation_id' => 'nullable|numeric',
    'specification_id' => 'nullable|numeric',
    'col' => 'nullable|numeric'
  ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }

  public function chapter()
  {
    return $this->belongsTo(Chapter::class);
  }

  public function timelines()
  {
    return $this->belongsToMany(Timeline::class)->orderBy('date', 'desc');
  }
  public function stages()
  {
    return $this->belongsToMany(Stage::class)->orderBy('sort', 'desc');
  }

  public function serverElements()
  {
    return $this->hasMany(ServerElement::class)->with('element');
  }
  public function specification()
  {
    return $this->belongsTo(Specification::class);
  }
}
