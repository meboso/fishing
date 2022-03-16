<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeRodNameColumnOfReelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reels', function (Blueprint $table) {
           $table->renameColumn('rod_name', 'reel_name'); // カラムの物理名変更
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
        Schema::table('reels', function (Blueprint $table) {
            //
        });
    }
}
