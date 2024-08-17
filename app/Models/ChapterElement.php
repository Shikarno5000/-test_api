<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterElement extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'chapter_id',
      'element_id',
      'col',
      'specification_id',
    ];

    public $rules = [
      'chapter_id' => 'numeric',
      'element_id' => 'required|numeric',
      'col' => 'nullable|numeric',
      'specification_id' => 'nullable|numeric'
    ];

  public function element()
  {
    return $this->belongsTo(Element::class);
  }
  public function specification()
  {
    return $this->belongsTo(Specification::class);
  }
  public function chapter()
  {
    return $this->belongsTo(Chapter::class);
  }

}
