<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterPlk extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'plk_id',
      'chapter_id',
      'col',
      'specification_id',
    ];

    public $rules = [
      'col' => 'nullable|numeric',
      'plk_id' => 'required|numeric',
      'chapter_id' => 'numeric',
      'col' => 'nullable|numeric',
      'specification_id' => 'nullable|numeric'
    ];

  public function plk()
  {
    return $this->belongsTo(Plk::class);
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
