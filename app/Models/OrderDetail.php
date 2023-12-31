<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable=['qty','amount'];
    use HasFactory;

    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
