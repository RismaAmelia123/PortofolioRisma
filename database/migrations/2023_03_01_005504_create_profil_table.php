<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->integer('nisn');
            $table->string('nama',40);
            $table->string('tl',40);
            $table->date('ttl');
            $table->enum('jk',['L','P']);
            $table->string('status',40);
            $table->string('pendidikan',40);
            $table->string('kontak',13);
            $table->string('email',40);
            $table->text('alamat');
            $table->string('deskripsi');
            $table->text('foto');
            $table->primary('nisn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
