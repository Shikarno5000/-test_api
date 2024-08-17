<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementPrice extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'element_id',
    'counter_agent_id',
    'price',
    'price_for_matrix'
  ];

  public $rules = [
    'counter_agent_id' => 'required|numeric',
    'element_id' => 'required|numeric',
    'price' => 'required|numeric',
    'price_for_matrix' => 'nullable|numeric'
  ];

  public function counterAgent()
  {
    return $this->belongsTo(CounterAgent::class);
  }
  public function element()
  {
    return $this->belongsTo(Element::class)->select('id', 'name', 'article');
  }
}
