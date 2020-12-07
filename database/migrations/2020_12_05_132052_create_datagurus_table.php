<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatagurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('bekerja');
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
        Schema::dropIfExists('datagurus');
    }
}
