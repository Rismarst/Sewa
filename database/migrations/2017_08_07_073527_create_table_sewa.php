<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->increments('id_sewa');
            $table->integer('id_kamera');
            $table->date('tanggal_sewa');
            $table->string('nama_customer');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->integer('no_tlp');
            $table->integer('no_ktp');
            $table->integer('jumlah_hari');
            $table->integer('harga_sewa');
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
        Schema::dropIfExists('sewa');
    }
}
