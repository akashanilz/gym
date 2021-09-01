<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
    public function getDateAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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


    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function oder(){
        return $this->hasMany(Oder::class);
    }
    public function attendance(){
        return $this->hasMany(Attendance::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function cart_total(){
        return $this->cart->sum(function ($cart){
            return $cart->product->price;
            });
    }
}