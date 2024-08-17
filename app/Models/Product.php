<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'chapter_id',
    'col',
    'name',
    'code',
    'product_status_id',
    'height',
    'width',
    'depth',
    'corpus_type_id',
    'weight_estimation',
    'production_time_estimation',
    'power',
    'switch',
    'cross_section',
    'unforeseen_expenses_percentage',
    'developer_id',
    'development_status_id',
    'version',
    'version_group',
    'version_date',
    'version_comment',
    'version_price',
    'version_pfa',
    'ups',
    'ip_id',
    'voltage',
    'location_id',
    'specification_id',
    'ex_id'
  ];

  public $rules = [
    'chapter_id' => 'numeric',
    'col' => 'nullable|numeric',
    'name' => 'required|string|max:200',
    'code' => 'required|string|max:300',
    'product_status_id' => 'nullable|numeric',
    'height' => 'nullable|numeric',
    'width' => 'nullable|numeric',
    'depth' => 'nullable|numeric',
    'corpus_type_id' => 'nullable|numeric',
    'weight_estimation' => 'nullable|numeric',
    'production_time_estimation' => 'nullable|numeric',
    'power' => 'nullable|numeric',
    'switch' => 'nullable|numeric',
    'cross_section' => 'nullable|numeric',
    'unforeseen_expenses_percentage' => 'nullable|numeric',
    'developer_id' => 'nullable|numeric',
    'development_status_id' => 'nullable|numeric',
    'version' => 'nullable|numeric',
    'version_group' => 'nullable|numeric',
    'version_date' => 'nullable|date',
    'version_comment' => 'nullable|string|max:100',
    'version_price' => 'nullable|numeric',
    'version_pfa' => 'nullable|boolean',
    'ups' => 'nullable|numeric',
    'ip_id' => 'nullable|numeric',
    'voltage' => 'nullable|string|max:15',
    'location_id' => 'nullable|numeric',
    'specification_id' => 'nullable|numeric',
    'ex_id' => 'nullable|numeric',
  ];

  protected $casts = [
    'version_pfa' => 'boolean'
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
  public function specification()
  {
    return $this->belongsTo(Specification::class);
  }
  public function productPlks()
  {
    return $this->hasMany(ProductPlk::class)->with('plk');
  }
  public function productPlkWithElements()
  {
    return $this->hasMany(ProductPlk::class)->with('plk.plkElements');
  }
  public function productElements()
  {
    return $this->hasMany(ProductElement::class)->with('element', 'elementPrice');
  }
  public function developer()
  {
    return $this->belongsTo(User::class)->select(['id', 'email', "name", "name_short", "birth_date", "phone", 'phone_internal', 'comment', "department_id", 'user_role_id', "user_status_id", "position_id"]);
  }
}
