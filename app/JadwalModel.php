<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    protected $table = "jadwal";
    protected $fillable = ['matpel_id', 'guru_id', 'jam_mulai', 'jam_akhir', 'ruang_id', 'created_at', 'updated_at'];

    public function guru()
    {
        return $this->belongsTo(GuruModel::class, 'guru_id');
    }

    public function matpel()
    {
        return $this->belongsTo(MatpelModel::class, 'matpel_id');
    }

    public function ruang()
    {
        return $this->belongsTo(RuangModel::class, 'ruang_id');
    }
}
