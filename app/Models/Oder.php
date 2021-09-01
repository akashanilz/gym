<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;
    protected $casts =[

         'product' => 'array',
     ];

     public function product(){
        return $this->belongsTo(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function supplement(){
        return $this->belongsTo(Supplement::class);
    }
    public function material(){
        return $this->belongsTo(Material::class);
    }
     /*public function user(){
        return $this->belongsTo(User::class);
    }*/
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function merchant(){
        return $this->belongsTo(user::class);
    }

}