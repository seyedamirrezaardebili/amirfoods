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
        Schema::create('rests', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement()->primary();
            $table->string('userrestid');
            $table->foreignId('userrestid')->references('id')->on('userrests')->onDelete('cascade');
            $table->string('name');
            $table->string('group');
            $table->string('phone');
            $table->string('address');
            $table->string('zipcode')->nullable();
            $table->json('img')->nullable();
            $table->foreignId('img')->references('id')->on('img')->onDelete('cascade');
            $table->string('city');
            $table->json('worktime');
            $table->enum('status',['active','deactive','block','close','open']);
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
        Schema::dropIfExists('rests');
    }
};
