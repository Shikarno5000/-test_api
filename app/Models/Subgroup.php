<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subgroup extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'suffix',
    'direction_id',
  ];

  public $rules = [
    'name' => 'string|max:250',
    'suffix' => 'nullable|string|max:25',
    'direction_id' => 'numeric'
  ];

  // protected $appends = ['create_update', 'project_type'];
  // public function getProjectTypeAttribute()
  // {
  //   $direction = Direction::find($this->attributes['direction_id']);
  //   $project = Project::find($direction->project_id);
  //   return $project->project_type_id;
  // }

  public function direction()
  {
    return $this->belongsTo(Direction::class);
  }

  public function chapters()
  {
    return $this->hasMany(Chapter::class)->with('documents', 'subgroup.direction.project', 'products', 'servers', 'lowerLevels', 'chapterSoftwares', 'chapterElements', 'chapterPlks');
  }
  public function chapterWithElements()
  {
    return $this->hasMany(Chapter::class)->with('productWithElements', 'serverWithElements', 'lowerLevelWithElements', 'chapterElements', 'chapterPlks.plk.plkElements');
  }
}
