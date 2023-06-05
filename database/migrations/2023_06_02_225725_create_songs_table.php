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
        Schema::create('songs', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->foreignId( 'parent_id');

            $table->string(  'artist', 150);

            $table->string( 'song')->nullable();

            $table->string( 'album')->nullable();

            $table->string(  'file', 100)->nullable();


            $table->string( 'genre',  5);

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
        Schema::dropIfExists('songs');
    }
};
