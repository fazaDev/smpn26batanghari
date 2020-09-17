<?php

namespace App\Http\Controllers\Admin;

use App\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kelas;
use App\OrangTua;
use App\Siswa;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $siswa = Siswa::count();
        $guru = Guru::count();
        $kelas = Kelas::count();
        $ortu = OrangTua::count();

        return view('admin.dashboard', compact('siswa', 'guru', 'kelas', 'ortu'));
    }
}
