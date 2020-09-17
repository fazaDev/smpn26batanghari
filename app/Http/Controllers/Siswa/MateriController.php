<?php

namespace App\Http\Controllers\Siswa;

use App\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
{
    public function index()
    {
        $kelas = Auth::user()->siswa->kelas_id;

        $materi = Materi::where('kelas_id', $kelas)->get();

        return view('siswa.materi.index', compact('materi'));
    }
}
