<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatpelModel extends Model
{
    protected $table = "matpel";
    protected $fillable = ['kode', 'nama', 'jurusan', 'created_at', 'updated_at'];

    public function jadwal()
    {
        return $this->hasOne('App\JadwalModel');
    }
}
