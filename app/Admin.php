<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = ['nama_admin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
