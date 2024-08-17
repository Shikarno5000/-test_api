<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterDpu extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'col',
      'dpu_id',
      'chapter_id'
    ];

    public $rules = [
      'col' => 'nullable|numeric',
      'dpu_id' => 'required|numeric',
      'chapter_id' => 'numeric'
    ];

  public function dpu()
  {
    return $this->belongsTo(Dpu::class);
  }
}
