<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasApiTokens,HasFactory;
    use SoftDeletes;
    
    protected $table = 'customers';
    protected $primarykey = 'id';
    protected $fillable = ['first_name','last_name','phone','email','address','profile_photo','password'];
}
