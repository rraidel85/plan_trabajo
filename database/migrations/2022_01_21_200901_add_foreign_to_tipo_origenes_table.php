<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToTipoOrigenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipo_origenes', function (Blueprint $table) {
            $table->unsignedBigInteger('tarea_id')
            ->after('id');

            $table->foreign('tarea_id')
            ->references('id')
            ->on('tareas')
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
        Schema::table('tipo_origenes', function (Blueprint $table) {
            $table->dropForeign(['tarea_id']);
            $table->dropColumn('tarea_id');
        });
    }
}
