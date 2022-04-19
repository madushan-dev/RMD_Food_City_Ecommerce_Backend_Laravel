<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'product_reviews';
    protected $fillable = ['status'];

    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
