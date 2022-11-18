<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //script yang dijalankan ketika php artisan migrate
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('jurusan');
            $table->string('angkatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //script yang dijalankan ketika php artisan migrate:rollback
    {
        Schema::dropIfExists('mahasiswa');
    }
}
