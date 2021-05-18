<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DateTime;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationships
     */

    public function role() 
    {
      return $this->belongsTo(Role::class);
    }

    /**
     * Attributes
     */

    public function getCreatedAtAttribute($value) {
      return (new DateTime($value))->format('d. m. Y.');
    }

    public function getUpdatedAtAttribute($value) {
      return (new DateTime($value))->format('d. m. Y.');
    }

    public function getEmailVerifiedAtAttribute($value) {
      if ($value) {
        return (new DateTime($value))->format('d. m. Y.');
      } else {
        return "/";
      }
    }

    public function getVerifiedAtAttribute() {
      if ($this->email_verified_at != '/') {
        return "<span class='badge badge-success'>Verifikovan</span>";
      } else {
        return "<span class='badge badge-danger'>Nije Verifikovan</span>";
      } 
    }

    /**
     * Scopes
     */

    //This is because we do not want to show superadministrators accounts on admin account
    public function scopeNonSuperadmin($query)
    {
      return $query->where('role_id', '!=', 1);
    } 

}