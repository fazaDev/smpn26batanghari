<?php

namespace App\Http\Controllers\Guru;

use App\Kelas;
use App\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::where('user_id', Auth::user()->id)->get();

        return view('guru.materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();

        return view('guru.materi.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required',
            'judul_materi' => 'required',
            'file_materi' => 'required|file|mimes:pdf,docx,doc',
        ]);

        $uploadedFile = $request->file('file_materi');

        $path = $uploadedFile->store('public/materi');


        Materi::create([
            'judul_materi' => $request->judul_materi,
            'kelas_id' => $request->kelas_id,
            'user_id' => Auth::user()->id,
            'file_materi' => $path
        ]);

        return redirect()->route('guru-materi.index')->with('info', 'Data materi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);

        Storage::delete($materi->file_materi);

        $materi->delete();

        return redirect()->route('guru-materi.index')->with('info', 'Data materi berhasil dihapus.');
    }
}
