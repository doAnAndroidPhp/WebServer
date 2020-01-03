<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('luot_choi_id');
            $table->Integer('cau_hoi_id');
            $table->string('phuong_an');
            $table->Integer('diem');
            $table->timestamps();
        });
        Schema::table('chi_tiet_luot_choi', function($table){
            $table->Integer('luot_choi_id')->unsigned();
            $table->foreign('luot_choi_id')->references('id')->on('luot_choi');
        });
        Schema::table('chi_tiet_luot_choi', function($table){
            $table->Integer('cau_hoi_id')->unsigned();
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hoi');
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
