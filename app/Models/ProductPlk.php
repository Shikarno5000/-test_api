<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPlk extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'col',
      'plk_id',
      'product_id',
      'ready_col',
      'position',
      'comment'
    ];

    public $rules = [
      'col' => 'nullable|numeric',
      'plk_id' => 'numeric',
      'product_id' => 'numeric',
      'ready_col' => 'nullable|numeric',
      'position' => 'nullable|string|max:10',
      'comment' => 'nullable|string|max:100'
    ];

    public function plk()
    {
      return $this->belongsTo(Plk::class);
    }

}
