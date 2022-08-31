<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nomor')->unique();
            $table->date('tanggal');
            $table->float('berat');
            $table->integer('ukuran');
            $table->string('isi');
            $table->string('layanan');
            $table->string('pengirim');
            $table->string('penerima');
            $table->string('status');
            $table->unsignedBigInteger('history_id')->constrained();
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
        Schema::dropIfExists('resis');
    }
};
