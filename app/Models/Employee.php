<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = ['first_name','last_name','phone','email','address','profile_photo','password'];
}
