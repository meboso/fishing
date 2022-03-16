<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeRodNameColumnOfMainLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_lines', function (Blueprint $table) {
            $table->renameColumn('rod_name', 'main_line_name'); // カラムの物理名変更
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_lines', function (Blueprint $table) {
            //
        });
    }
}
