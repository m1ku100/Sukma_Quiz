<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->increments('id');
            $table-> string ('pelajaran');
            $table-> string ('kelas');
            $table-> string ('jurusan');
            $table-> text ('soal');
            $table-> text ('pilihan_a');
            $table-> text ('pilihan_b');
            $table-> text ('pilihan_c');
            $table-> text ('pilihan_d');
            $table-> text ('pilihan_e');
            $table-> text ('kunci_jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal');
    }
}
