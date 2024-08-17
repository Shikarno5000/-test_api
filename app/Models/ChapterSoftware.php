<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterSoftware extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'software_id',
      'chapter_id',
      'col',
      'specification_id',
    ];

    public $rules = [
      'col' => 'nullable|numeric',
      'software_id' => 'required|numeric',
      'chapter_id' => 'numeric',
      'col' => 'nullable|numeric',
      'specification_id' => 'nullable|numeric'
    ];

  public function software()
  {
    return $this->belongsTo(Software::class);
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
