<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'chapter_id',
      'name',
      'suffix',
      'sort',
      'execution_weight',
      'document_status_id',
      'last_status_change',
      'change_from_gip',
      'executor_id',
    ];

    public $rules = [
      'chapter_id' => 'numeric',
      'name' => 'required|string|max:250',
      'suffix' => 'nullable|string|max:25',
      'sort' => 'nullable|numeric',
      'execution_weight' => 'nullable|numeric',
      'document_status_id' => 'nullable|numeric',
      'change_from_gip' => 'nullable|string|max:250',
      'executor_id' => 'nullable|numeric'
    ];

  public function files()
  {
    return $this->belongsToMany(File::class);
  }
  public function timelines()
  {
    return $this->belongsToMany(Timeline::class)->orderBy('date', 'desc');
  }
  public function stages()
  {
    return $this->belongsToMany(Stage::class)->orderBy('sort', 'desc');
  }
  public function chapter()
  {
    return $this->belongsTo(Chapter::class);
  }
  public function executor()
  {
    return $this->belongsTo(User::class)->select(['id', 'email', "name", "name_short", "birth_date", "phone", 'phone_internal', 'comment', "department_id", 'user_role_id', "user_status_id", "position_id"]);
  }
}
