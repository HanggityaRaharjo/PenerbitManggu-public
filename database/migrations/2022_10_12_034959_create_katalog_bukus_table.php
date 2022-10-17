<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatalogBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katalog_bukus', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('judul');
            $table->string('keterangan');
            $table->string('kategori')->nullable();
            $table->string('direct');
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
        Schema::dropIfExists('katalog_bukus');
    }
}
