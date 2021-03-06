<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('nguoi_choi_id');
            $table->Integer('so_cau');
            $table->string('diem');
            $table->string('ngay_gio');
            $table->timestamps();
        });
        Schema::table('luot_choi', function($table){
            $table->Integer('nguoi_choi_id')->unsigned();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
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
