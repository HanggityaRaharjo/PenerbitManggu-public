<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanRoyaltisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_royaltis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataroyalti_id');
            $table->string('nama');
            $table->string('email');
            $table->string('no_ktp');
            $table->string('file_ktp');
            $table->string('no_npwp');
            $table->string('file_npwp');
            $table->string('no_rekening');
            $table->string('Pilihan_bank');
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
        Schema::dropIfExists('pengajuan_royaltis');
    }
}
