<?php

namespace App\Http\Controllers\Guru;

use App\Kelas;
use App\Latihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latihan = Latihan::where('user_id', Auth::user()->id)->get();

        return view('guru.latihan.index', compact('latihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();

        return view('guru.latihan.create', compact('kelas'));
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
            'judul_latihan' => 'required',
            'file_latihan' => 'required|file|mimes:pdf,docx,doc',
        ]);

        $uploadedFile = $request->file('file_latihan');

        $path = $uploadedFile->store('public/latihan');


        Latihan::create([
            'judul_latihan' => $request->judul_latihan,
            'kelas_id' => $request->kelas_id,
            'user_id' => Auth::user()->id,
            'file_latihan' => $path
        ]);

        return redirect()->route('guru-latihan.index')->with('info', 'Data latihan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $latihan = Latihan::findOrFail($id);

        // dd($latihan);

        return view('guru.latihan.show', compact('latihan'));
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
        //
    }
}
