<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factors', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement()->primary();
            $table->string('userId');
            $table->string('factoryid');
            $table->json('foodid');
            $table->foreignId('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('factoryid')->references('id')->on('factors')->onDelete('cascade');
            $table->foreignId('foodid')->references('id')->on('userrests')->onDelete('cascade');
            $table->integer('price');
            $table->integer('diccount');
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
        Schema::dropIfExists('factors');
    }
};
