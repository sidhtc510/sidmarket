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
            $table->bigIncrements('id');
            $table->string('id_postavschika')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id'); // привязать к таблице с категориями
            $table->float('price', 8, 2)->default(0)->unsigned();
            $table->float('price_old', 8, 2)->default(0)->unsigned();
            $table->string('description_short')->nullable();
            $table->string('description')->nullable();
            $table->integer('brand_id')->nullable();  // привязать к таблице с наименованиями брендов
            $table->string('image_main')->default('no_image.svg'); // главная картинка
            $table->string('keywords')->nullable();
            $table->enum('status', [0,1,2])->default(0); //0 не опубликован, 1 опубликован, 2 заблокирован
            $table->enum('newest', [0,1])->default(0);
            $table->enum('hit', [0,1])->default(0); 
            $table->string('related_product');
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
