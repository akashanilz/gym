<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Carbon\Carbon;

class Month extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getMonthAndYearAttribute($value)
    {
        return Carbon::parse($value)->format('M Y');
    }
    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}