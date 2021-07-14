<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuangModel extends Model
{
    protected $table = "ruang";
    protected $fillable = ['nama', 'status', 'created_at', 'updated_at'];

    public function jadwal()
    {
        return $this->hasOne('App\JadwalModel');
    }
}
