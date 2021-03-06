<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etoile');
            $table->string('pseudo');
            $table->integer('produit_id')->unsigned()->nullable();
            $table->string('titre_produit');
            $table->timestamps();
        });

        Schema::table('note', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note');
    }
}
