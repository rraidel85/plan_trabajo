<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCargoForeingToUserAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_area', function (Blueprint $table) {
            $table->unsignedBigInteger('cargo_id')
            ->nullable()->after('area_id');

            $table->foreign('cargo_id')
            ->references('id')
            ->on('cargos')
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
        Schema::table('user_area', function (Blueprint $table) {
            $table->dropForeign(['cargo_id']);
            $table->dropColumn('cargo_id');
        });
    }
}
