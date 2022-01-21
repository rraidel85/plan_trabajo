<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_rol', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('area_id');

            $table->timestamps();

            $table->foreign('rol_id')
            ->references('id')
            ->on('rols')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->foreign('area_id')
            ->references('id')
            ->on('areas')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_rol');
    }
}
