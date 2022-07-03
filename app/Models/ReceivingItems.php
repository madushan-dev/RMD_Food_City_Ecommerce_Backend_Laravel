<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceivingItems extends Model
{
    use HasFactory;
    protected $table = 'receiving_items';
    protected $fillable = ['receiving_id','product_id','quantity'];
}
