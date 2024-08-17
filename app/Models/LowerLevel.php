<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowerLevel extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'chapter_id',
    'name',
    'article',
    'specification_id',
    'col',
    'ip_id',
    'ex_id'
  ];

  public $rules = [
    'chapter_id' => 'numeric',
    'name' => 'required|string|max:250',
    'article' => 'nullable|string|max:100',
    'col' => 'nullable|numeric',
    'specification_id' => 'nullable|numeric',
    'ip_id' => 'nullable|numeric',
    'ex_id' => 'nullable|numeric',
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
  public function lowerLevelElements()
  {
    return $this->hasMany(LowerLevelElement::class)->with('element');
  }
  public function specification()
  {
    return $this->belongsTo(Specification::class);
  }

}
