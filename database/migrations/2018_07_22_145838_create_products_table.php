<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplierID')->unassigned();
            $table->string('name');
            $table->string('category');
            $table->string('brand_name');
            $table->string('description');
            $table->integer('isHot')->unassigned();
            $table->integer('quantity')->unassigned();
            $table->string('image')->nullable();
            $table->float('price', 8,2)->unassigned();
             $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
