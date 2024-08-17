<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends BaseModel
{
  use HasFactory;

  protected $fillable = [
    'created_by',
    'updated_by',
    'name',
    'url',
    'size',
    'date',
    'comment'
  ];
  public $rules = [
    'file' => 'file|mimes:doc,pdf,docx,json,xlsx,ods,cvs,png,jpeg,jpg,drawio,io',
    'name' => 'nullable|string|max:100',
    'date' => 'nullable|string',
    'comment' => 'nullable|string|max:200',
    'to' => ''
  ];

  public function elements()
  {
    return $this->belongsToMany(Element::class);
  }
  public function documents()
  {
    return $this->belongsToMany(Document::class);
  }
  public function products()
  {
    return $this->belongsToMany(Product::class);
  }
  public function dpus()
  {
    return $this->belongsToMany(Dpu::class);
  }
  public function servers()
  {
    return $this->belongsToMany(Server::class);
  }
  public function plks()
  {
    return $this->belongsToMany(Plk::class);
  }
  public function softwares()
  {
    return $this->belongsToMany(Software::class);
  }
  public function lowerLevels()
  {
    return $this->belongsToMany(LowerLevel::class);
  }
  public function orders()
  {
    return $this->belongsToMany(Order::class);
  }
  public function officialNotes()
  {
    return $this->belongsToMany(OfficialNote::class);
  }
  public function letters()
  {
    return $this->belongsToMany(Letter::class);
  }
  public function contracts()
  {
    return $this->belongsToMany(Contract::class);
  }
  public function applications()
  {
    return $this->belongsToMany(Application::class);
  }

}
