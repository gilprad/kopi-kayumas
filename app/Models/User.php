<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function group()
    {
        return $this->hasOne(Group::class, 'user_id', 'id');
    }

    public function ketua()
    {
        return $this->belongsTo(User::class, 'ketua_id');
    }

    public function anggota()
    {
        return $this->hasMany(User::class, 'ketua_id');
    }

    public function bean_stocks()
    {
        return $this->hasMany(BeanStock::class, 'user_id', 'id');
    }

    public function bean_prices()
    {
        return $this->hasMany(BeanPrice::class, 'user_id', 'id');
    }
    
    public function carts()
    {
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }
}
