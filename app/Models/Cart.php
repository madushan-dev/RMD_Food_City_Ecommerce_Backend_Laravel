<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'order_carts';

    protected $fillable = ['customer_id','product_id','quantity'];

    public function products(){
        return $this->hasMany(Product::class,'id','product_id');
    }
    
}


