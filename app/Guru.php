<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama_guru','foto','mapel_id','tempat_tinggal', 'tanggal_lahir', 'no_telpon', 'email','password'];
    public $timestamps = true;

    public function Mapel()
    {
        return $this->belongsTo('App\Mapel', 'mapel_id');
    }
}
