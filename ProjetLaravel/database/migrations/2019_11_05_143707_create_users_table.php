<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('panier_id')->unsigned()->nullable();
            $table->integer('note_id')->unsigned()->nullable();
            $table->tinyInteger('admin');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('panier_id')->references('id')->on('panier');
            $table->foreign('note_id')->references('id')->on('note');
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
}
