<?php

use Illuminate\Support\Facades\DB;
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
            $table->bigIncrements('id');
            $table->string('id_postavschika')->nullable();
            $table->string('title')->nullable()->index();
            $table->string('slug')->nullable()->unique()->index();
            $table->integer('category_id')->nullable(); // привязать к таблице с категориями
            $table->float('price', 8, 2)->default(0)->unsigned();
            $table->float('price_new', 8, 2)->default(0)->unsigned();
            $table->text('description_short')->nullable();
            $table->text('description')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('image_main')->default('no_image.svg'); // главная картинка
            $table->string('keywords')->nullable()->index();
            $table->enum('status', [0,1,2])->default(0); //0 не опубликован, 1 опубликован, 2 заблокирован
            $table->enum('newest', [0,1])->default(0);
            $table->enum('hit', [0,1])->default(0); 
            $table->string('related_product')->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE Products ADD FULLTEXT search(title, description_short, description)');
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
