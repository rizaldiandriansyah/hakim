<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('no_ktp', 100);
            $table->string('tempat_lahir', 45);
            $table->date('tanggal_lahir');
            $table->string('telp', 45);
            $table->longText('alamat');
            $table->string('desa', 45);
            $table->string('kecamatan', 45);
            $table->text('url_foto')->nullable();
            $table->enum('pilih_periksa', ['ibu_hamil', 'bayi'])->nullable();

            $table->timestamps();

            $table->integer('user_id')->unsigned();   
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
