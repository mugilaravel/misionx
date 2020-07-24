<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            //pemohon
            $table->string('tipe');//organik,anorganik
            $table->string('nik');
            $table->string('nama');
            $table->string('telp');
            $table->string('email')->nullable();
            //unit kerja
            $table->string('lokasi');//pusat atau kanwil pilihan
            $table->string('kanwil');//pusat,makasar,denpasr,bandung
            $table->string('unit_kerja');
            //permasalahan
            $table->string('kriteria');//kriteria masalah, pilihan combo box
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('image_real_name')->nullable();
            $table->string('image_system_name')->nullable();
            $table->string('image_path')->nullable();
            $table->string('status');//pengajuan,onprogress,done
            $table->string('sifat');//minor,middle,major
            $table->date('tbl_pengajuan')->nullable();
            //petugas
            $table->string('petugas')->nullable();
            $table->string('catatan')->nullable();
            $table->date('tgl_selesai')->nullable();
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
        Schema::dropIfExists('ticket');
    }
}
