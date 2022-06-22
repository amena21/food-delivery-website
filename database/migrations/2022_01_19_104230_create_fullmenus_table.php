<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fullmenus', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->decimal('price',5,3)->nullable();
            $table->string("description")->nullable();
            $table->string("image")->nullable();
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
        Schema::dropIfExists('fullmenus');
    }
}
