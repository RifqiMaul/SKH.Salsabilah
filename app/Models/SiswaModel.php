<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nama_lengkap', 'email', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin', 'alamat', 'nama_ayah', 'nama_ibu',
        'pekerjaan_ayah', 'pekerjaan_ibu', 'no_hp_ortu', 'anak_ke',
        'agama', 'ketunaan', 'berkas_ktp_ortu', 'berkas_kk',
        'berkas_akta_lahir', 'berkas_hasil_tes_ketunaan', 'berkas_pas_foto', 'password'
    ];
}
