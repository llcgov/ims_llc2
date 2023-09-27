<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['customerName','address','phoneNo','service_type','address'];
    use HasFactory;

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
