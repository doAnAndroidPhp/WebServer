<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichSuMuaCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_mua_credit', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('nguoi_choi_id');
            $table->Integer('goi_credit_id');
            $table->Integer('credit');
            $table->Integer('so_tien');
            $table->timestamps();
        });
        Schema::table('lich_su_mua_credit', function($table){
            $table->Integer('nguoi_choi_id')->unsigned();
            $table->foreign('nguoi_choi_id')->references('id')->on('goi_credit');
        });
        Schema::table('lich_su_mua_credit', function($table){
            $table->Integer('goi_credit_id')->unsigned();
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
