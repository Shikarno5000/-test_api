<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'contract_id',
    'article',
    'description',
    'date',
    'delivery_date',
    'counter_agent_id',
    'comment',
    'specification_status_id'
  ];

  public $rules = [
    'contract_id' => 'numeric',
    'article' => 'required|string|max:100',
    'description' => 'nullable|string|max:250',
    'date' => 'nullable|date',
    'delivery_date' => 'nullable|date',
    'counter_agent_id' => 'nullable|numeric',
    'comment' => 'nullable|string',
    'specification_status_id' => 'nullable|numeric',
  ];

  public function counterAgent()
  {
    return $this->belongsTo(CounterAgent::class);
  }
  public function contract()
  {
    return $this->belongsTo(Contract::class);
  }
  public function files()
  {
    return $this->belongsToMany(File::class);
  }
  public function products()
  {
    return $this->hasMany(Product::class)->with('chapter.subgroup.direction.project');
  }
  public function servers()
  {
    return $this->hasMany(Server::class)->with('chapter.subgroup.direction.project');
  }
  public function lowerLevels()
  {
    return $this->hasMany(LowerLevel::class)->with('chapter.subgroup.direction.project');
  }
  public function chapterElements()
  {
    return $this->hasMany(ChapterElement::class)->with('element', 'chapter.subgroup.direction.project');
  }
  public function chapterPlks()
  {
    return $this->hasMany(ChapterPlk::class)->with('plk', 'chapter.subgroup.direction.project');
  }
  public function chapterSoftware()
  {
    return $this->hasMany(ChapterSoftware::class)->with('software', 'chapter.subgroup.direction.project');
  }

  public function stages()
  {
    return $this->belongsToMany(Stage::class)->orderBy('sort', 'desc');
  }
}
