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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('platform');
            $table->string('region');
            $table->string('availability');
            $table->string('delivery');
            $table->string('price');
            $table->string('non_discounted_price');
            $table->string('publisher');
            $table->string('developer');
            $table->date('release_date');
            $table->text('description');
            $table->string('genre');
            $table->string('image_url');
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
