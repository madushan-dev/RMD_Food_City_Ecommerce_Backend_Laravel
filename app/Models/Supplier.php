<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'suppliers';
    protected $primarykey = 'id';
    protected $fillable = ['company','address','email','phone'];
}
