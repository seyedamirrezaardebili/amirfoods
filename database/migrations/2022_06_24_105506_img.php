<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     */
    public function up()
    {
        Schema::create('img', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement()->primary();
            $table->integer('address');
            $table->enum('type',['user','food','rest','restuser']);
            $table->enum('status',['active','deactive']);
            $table->softDeletes();
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
        Schema::dropIfExists('img');
    }
};
