<?php

namespace App\Http\Controllers\Ortu;

use App\Penilaian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaian = Penilaian::where('siswa_id', Auth::user()->ortu->siswa_id)->get();

        // return $penilaian;

        return view('ortu.index', compact('penilaian'));
    }
}
