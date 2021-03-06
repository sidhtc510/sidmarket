<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unique()->unsigned();
            $table->string('firstname')->require;
            $table->string('middle')->nullable();
            $table->string('lastname')->require;
            $table->string('address')->nullable();
            $table->integer('housenumber')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('city')->nullable();
            $table->string('phonenumber')->max(14)->min(6)->nullable();;
            $table->timestamp('dateofbirth')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('contacts');
    }
}
