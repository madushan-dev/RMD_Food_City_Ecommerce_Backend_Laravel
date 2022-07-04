<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiving extends Model
{
    use HasFactory;
    protected $table = 'receivings';
    protected $fillable = ['date','supplier_id'];



    public function suppliers(){
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }

    
    public function products(){
        return $this->hasMany(ReceivingItems::class);
    }
}
