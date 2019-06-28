<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateRelatorioViewModuloView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(
            file_get_contents(__DIR__ . '/../sqls/views/relatorio.view_modulo.sql')
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared(
            'DROP VIEW relatorio.view_modulo;'
        );
    }
}
