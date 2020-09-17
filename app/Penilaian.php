<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian';

    protected $fillable = ['siswa_id', 'kelas_id', 'latihan_id', 'nilai', 'keterangan', 'file_siswa'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function latihan()
    {
        return $this->belongsTo(Latihan::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
