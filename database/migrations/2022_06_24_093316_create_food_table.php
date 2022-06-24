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
        Schema::create('food', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement()->primary();
            $table->dropForeignIdFor(rests::class);
            $table->string('name');
            $table->integer('price');
            $table->integer('diccount');
            $table->json('img')->nullable();
            $table->foreignId('img')->references('id')->on('img')->onDelete('cascade');
            $table->json('groups');
            $table->enum('status',['active','deactive']);
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
        Schema::dropIfExists('food');
    }
};
