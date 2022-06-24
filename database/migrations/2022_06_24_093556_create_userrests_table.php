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
        Schema::create('userrests', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement()->primary();
            $table->foreignIdFor(rests::class);
            $table->string('fullname');
            $table->string('phone')->unique();
            $table->text('address');
            $table->enum('status',['active','deactive','block']);
            $table->json('img');
            $table->foreignId('img')->references('id')->on('img')->onDelete('cascade');
            $table->string('password');
            $table->string('zipecode');
            $table->string('idcard');
        
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
        Schema::dropIfExists('userrests');
    }
};
