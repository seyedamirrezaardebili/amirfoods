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
        Schema::create('hitories', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement()->primary();
            $table->string('userid');
            $table->string('restid');
            $table->string('factoryid');
            $table->foreignId('userid');
            $table->foreignId('factoryid');
            $table->foreignId('restid');
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
        Schema::dropIfExists('hitories');
    }
};
