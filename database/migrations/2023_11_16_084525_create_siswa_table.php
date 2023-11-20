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
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string("nama_lengkap", 150);
            $table->string("email", 150)->unique();
            $table->text("tempat_lahir")->nullable();
            $table->date("tanggal_lahir")->nullable();
            $table->enum("jenis_kelamin", ["L", "P"])->nullable();
            $table->text("alamat")->nullable();
            $table->string("nama_ayah", 150)->nullable();
            $table->string("nama_ibu", 150)->nullable();
            $table->string("pekerjaan_ayah", 100)->nullable();
            $table->string("pekerjaan_ibu", 100)->nullable();
            $table->string("no_hp_ortu", 20)->nullable();
            $table->integer("anak_ke")->nullable();
            $table->enum("agama", ["Islam", "Kristen", "Katolik", "Hindu", "Buddha", "Khonghucu"])->nullable();
            $table->string("ketunaan", 150)->nullable();
            $table->text("berkas_ktp_ortu")->nullable();
            $table->text("berkas_kk")->nullable();
            $table->text("berkas_akta_lahir")->nullable();
            $table->text("berkas_hasil_tes_ketunaan")->nullable();
            $table->text("berkas_pas_foto")->nullable();
            $table->text("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
