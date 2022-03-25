<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('tgl_transaksi');
            $table->integer('uang_masuk')->nullable();
            $table->integer('uang_keluar')->nullable();
            $table->text('keterangan');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('alumni_funds');
    }
}
