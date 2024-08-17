<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

  protected $appends = ['create_update'];

  protected $hidden = ['created_at', 'updated_at', 'created_by', 'updated_by'];

  public function getCreateUpdateAttribute()
  {
    $result = [];
    if(isset($this->attributes['created_by'])) {
      $createdBy = User::select(['name_short'])->find($this->attributes['created_by']);
      if (isset($createdBy)) {
        $result['c'] = [
          'at' => $this->attributes['created_at'],
          'by' => $createdBy->name_short
        ];
      }
    }
    if(isset($this->attributes['updated_by'])) {
      $updatedBy = User::select(['name_short'])->find($this->attributes['updated_by']);
      if (isset($updatedBy)) {
        $result['u'] = [
          'at' => $this->attributes['updated_at'],
          'by' => $updatedBy->name_short
        ];
      }
    }
    return $result;
  }
}
