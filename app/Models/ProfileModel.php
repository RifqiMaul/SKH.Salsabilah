<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $primaryKey = 'id_profile';
    protected $fillable = [
        'nama_sekolah', 'deskripsi', 'alamat', 'email', 'telepon'
    ];
}
