<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    use HasFactory;
    protected $table='UserTable';
    protected $fillable = ['Username','UserTitle','Password','created_at','updated_at'];
}

