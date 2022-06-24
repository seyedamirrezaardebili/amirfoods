<?php

use App\Models\factor;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique()->primary();
            $table->foreignIdFor(factors::class);
            $table->string('fullname');
            $table->string('phone')->unique();
            $table->text('address');
            $table->json('img');
            $table->foreignId('img')->references('id')->on('img')->onDelete('cascade');
            $table->enum('status',['active','deactive','block']);
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
        Schema::dropIfExists('users');
    }
};
