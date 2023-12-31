<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','model','brand','type'];
    use HasFactory;

    public function supplies(){
        return $this->hasMany(Supply::class);
    }

    public function order(){
        $this->hasMany(Order::class);
    }
}
