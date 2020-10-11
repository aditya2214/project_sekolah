<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodyTugas extends Model
{
    //
    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo('App\DataMurid', 'nisn', 'NISN');
    }

    public function tugas()
    {
        return $this->belongsTo('App\HeaderTugas', 'kode', 'kode_tugas');
    }
}
