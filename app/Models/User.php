<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
  use HasFactory, Notifiable;

  // public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'created_by',
    'updated_by',
    'email',
    'password',
    "name",
    "name_short",
    "birth_date",
    "phone",
    'phone_internal',
    'comment',
    "department_id",
    'user_role_id',
    "user_status_id",
    "salary",
    "working_hours",
    "settings",
    "position_id"
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token'
  ];

  protected $appends = ['create_update'];
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

  public $rules = [
    'email' => 'string|email|max:50',
    'password' => 'nullable|string|max:100',
    'name' => 'required|string|max:50',
    'name_short' => 'required|string|max:25',
    'birth_date' => 'nullable|date',
    'phone' => 'nullable|string|max:20',
    'phone_internal' => 'nullable|string|max:20',
    'comment' => 'nullable|string|max:100',
    'department_id' => 'nullable|numeric',
    'user_role_id' => 'nullable|numeric',
    'user_status_id' => 'nullable|numeric',
    "salary" => 'nullable|numeric',
    "working_hours" => 'nullable|numeric',
    "settings" => 'json',
    'position_id' => 'nullable|numeric',
  ];

  protected $casts = [
    'settings' => 'array',
  ];

  public function position()
  {
    return $this->belongsTo(Position::class);
  }

  /**
   * Get the identifier that will be stored in the subject claim of the JWT.
   *
   * @return mixed
   */
  public function getJWTIdentifier()
  {
    return $this->getKey();
  }

  /**
   * Return a key value array, containing any custom claims to be added to the JWT.
   *
   * @return array
   */
  public function getJWTCustomClaims()
  {
    return [];
  }
}
