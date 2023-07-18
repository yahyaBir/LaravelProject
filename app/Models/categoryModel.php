<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;
    protected $table='CategoryTable';
    protected $fillable = ['CategoryTitle','CategoryDescription','Status','created_at','updated_at'];

}
