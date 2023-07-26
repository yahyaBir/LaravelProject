<?php

namespace App\Models;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class categoryModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='CategoryTable';
    protected $fillable = ['CategoryTitle','CategoryDescription','Status','created_at','updated_at'];
    public function product(): HasOne
    {
        return $this->hasOne(ProductController::class);
    }
}

