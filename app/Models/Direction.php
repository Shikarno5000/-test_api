<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'project_id',
      'name',
      'name_short',
      'sort'
    ];

    public $rules = [
      'project_id' => 'numeric',
      'name' => 'required|string|max:50',
      'name_short' => 'nullable|string|max:20',
      'sort' => 'nullable|numeric'
    ];


  public function project()
  {
    return $this->belongsTo(Project::class)->select(['id', 'name_short', 'cipher_prefix','project_type_id']);
  }

  public function subgroups()
  {
    return $this->hasMany(Subgroup::class);
  }

}
