<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Penilaian;

class PenilaianController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'file_siswa' => 'required|file|mimes:pdf,docx,doc,xls,xlsx',
        ]);

        $uploadedFile = $request->file('file_siswa');

        $path = $uploadedFile->store('public/jawaban');


        Penilaian::create([
            'latihan_id' => $request->latihan_id,
            'kelas_id' => $request->kelas_id,
            'siswa_id' => $request->siswa_id,
            'file_siswa' => $path
        ]);

        return redirect()->route('latihan.index')->with('info', 'Data latihan berhasil disimpan.');
    }
}
