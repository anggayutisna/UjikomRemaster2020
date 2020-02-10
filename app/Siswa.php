<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nis','nama_siswa', 'kelas_id', 'jurusan_id', 'tempat_tinggal', 'tanggal_lahir', 'no_telpon', 'email','password'];
    public $timestamps = true;

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id');
    }

    public function Jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'jurusan_id');
    }
}
