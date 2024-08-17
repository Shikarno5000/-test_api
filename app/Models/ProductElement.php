<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductElement extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'created_by',
      'updated_by',
      'element_id',
      'product_id',
      'col',
      'position',
      'comment',
      'fix_price',
      'element_price_id'
    ];

    public $rules = [
      'element_id' => 'numeric',
      'product_id' => 'numeric',
      'col' => 'nullable|numeric',
      'position' => 'nullable|string|max:50',
      'comment' => 'nullable|string|max:250',
      'fix_price' => 'nullable|numeric',
      'element_price_id' => 'nullable|numeric'
    ];

    public function element()
    {
      return $this->belongsTo(Element::class);
    }
    public function elementPrice()
    {
      return $this->belongsTo(ElementPrice::class);
    }
}
