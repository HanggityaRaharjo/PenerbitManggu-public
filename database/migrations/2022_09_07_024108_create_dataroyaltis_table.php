<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataroyaltisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataroyaltis', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->nullable();
            $table->string('judul')->nullable();
            $table->string('penulis')->nullable();
            $table->string('jenis')->default('ROYALTI');
            $table->string('harga')->nullable();
            $table->string('stok')->nullable();
            $table->string('nilairoyalti')->nullable();
            $table->string('hutangroyalti')->nullable();
            $table->string('terjual')->nullable();
            $table->string('pengurangan')->nullable();
            $table->string('penambahan')->nullable();
            $table->string('saldoroyalti')->nullable();
            $table->string('pphpenulis')->nullable();
            $table->string('adminbank')->default('6500');
            $table->string('saldonet')->nullable();
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
        Schema::dropIfExists('dataroyaltis');
    }
}
