<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('code');
            $table->text('designation');
            $table->text('categorie');
            $table->text('quantite');
            $table->text('description');
            $table->text('conso1');
            $table->text('conso2');
            $table->text('conso3');
            $table->text('conso4');
            $table->text('conso5');
            $table->text('conso6');
            $table->text('prix');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entres');
    }
}
