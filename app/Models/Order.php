<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = ['status','delivery_company','tracking_number'];


    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function products(){
        return $this->hasMany(OrderProduct::class);
    }


}
