<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='ProductTable';
    protected $fillable = ['ProductTitle','ProductCategoryId','Barcode','ProductStatus','created_at','updated_at',];
}
