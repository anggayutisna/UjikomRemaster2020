<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['nilai', 'mapel_id','siswa_id'];
    public $timestamps = true;

     public function Mapel()
    {
        return $this->belongsTo('App\Mapel', 'mapel_id');
    }

     public function Siswa()
    {
        return $this->belongsTo('App\Siswa', 'siswa_id');
    }
}
