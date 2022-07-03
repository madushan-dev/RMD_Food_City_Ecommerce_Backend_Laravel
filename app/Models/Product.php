<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = ['name','cost_price','selling_price','count','category_id','description','brand_id','product_image'];

    public function brands(){
        return $this->belongsTo(Category::class,'brand_id','id');
    }
    
    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function reviews(){
        return $this->hasMany(Review::class,'product_id','id')->where('status','=', 'Approved');
    }
}
