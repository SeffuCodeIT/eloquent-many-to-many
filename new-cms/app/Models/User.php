<?php

namespace App\Models;
namespace App\User;

use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function post(){
        return $this->hasOne('App\Post');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }



    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany(Role::class)->withPivot('created_at');

        //customize table names and columns
//        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }
}
