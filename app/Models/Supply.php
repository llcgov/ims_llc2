<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $fillable=['quantity','measure_type','amount','remarks', 'product_id'];
    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
