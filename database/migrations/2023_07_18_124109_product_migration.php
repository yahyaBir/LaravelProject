<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductTable', function (Blueprint $table) {
            $table->id();
            $table->String('ProductTitle');
            $table->String('ProductCategoryID');
            $table->String('Barcode');
            $table->String('ProductStatus');
            $table->timestamps();

            $table->foreign('ProductCategoryID')->references('id')->on('CategoryTable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductTable');
    }
}
