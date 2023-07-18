<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $table='ProductTable';
    protected $fillable = ['ProductTitle','ProductCategoryId','Barcode','ProductStatus','created_t','updated_at',];
}
