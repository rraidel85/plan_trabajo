<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->unsignedBigInteger('tarea_id')
            ->nullable()->after('id');

            $table->foreign('tarea_id')
            ->references('id')
            ->on('tareas')
            ->onDelete('SET NULL')
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
        Schema::table('areas', function (Blueprint $table) {
            $table->dropForeign(['tarea_id']);
            $table->dropColumn('tarea_id');
          });
    }
}
