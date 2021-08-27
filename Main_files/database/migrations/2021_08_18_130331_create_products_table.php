<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'products',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('guid');
                $table->string('recipes');
                $table->string('img');
                $table->double('price');
                $table->double('maxi_price');
                $table->double('reduction_price');
                $table->string('info');
                $table->string('category_guid');
                $table->string('variant_category_guid');
                $table->string('dough_category_guid');
                $table->string('warehouse');
                $table->integer('iva');
                $table->string('department');
                $table->timestamps();
            }
        );
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
