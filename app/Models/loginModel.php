<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class loginModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='UserTable';
    protected $fillable = ['Username','UserTitle','Password','created_at','updated_at',];
}

