<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    protected $table = "guru";
    protected $fillable = ['nik', 'nama', 'status', 'created_at', 'updated_at'];

    public function jadwal()
    {
        return $this->hasOne('App\JadwalModel');
    }
}
