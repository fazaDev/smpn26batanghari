<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    protected $table = 'latihan';

    protected $fillable = ['judul_latihan', 'user_id', 'kelas_id', 'file_latihan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class);
    }

}
