<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'subgroup_id',
    'chapter_type_id',
  ];

  public $rules = [
    'name' => 'required|string|max:250',
    'subgroup_id' => 'numeric',
    'chapter_type_id' => 'numeric',
  ];


  public function documents()
  {
    return $this->hasMany(Document::class)->with('executor','chapter.subgroup.direction.project');
  }
  public function products()
  {
    return $this->hasMany(Product::class)->where(['version' => null])->with('productPlks', 'specification.contract','developer');
  }
  // для формирования списка элементов в проекте
  public function productWithElements()
  {
    return $this->hasMany(Product::class)->where(['version' => null])->with('productPlkWithElements','productElements');
  }
  // для формирования списка элементов в проекте
  public function serverWithElements()
  {
    return $this->hasMany(Server::class)->with('serverElements');
  }
  // для формирования списка элементов в проекте
  public function lowerLevelWithElements()
  {
    return $this->hasMany(LowerLevel::class)->with('lowerLevelElements');
  }
  // для формирования списка элементов в проекте
  public function chapterPlksWithElements()
  {
    return $this->hasMany(ChapterPlk::class)->with('plkElements');
  }
  public function servers()
  {
    return $this->hasMany(Server::class)->with('specification.contract');
  }
  public function lowerLevels()
  {
    return $this->hasMany(LowerLevel::class)->with('specification.contract');
  }
  public function chapterSoftwares()
  {
    return $this->hasMany(ChapterSoftware::class)->with('software', 'specification.contract');
  }
  public function chapterElements()
  {
    return $this->hasMany(ChapterElement::class)->with('element','specification.contract');
  }
  public function chapterPlks()
  {
    return $this->hasMany(ChapterPlk::class)->with('plk', 'specification.contract');
  }
  public function subgroup()
  {
    return $this->belongsTo(Subgroup::class);
  }
}
