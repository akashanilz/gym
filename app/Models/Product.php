<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Merchant::class);
    }
}