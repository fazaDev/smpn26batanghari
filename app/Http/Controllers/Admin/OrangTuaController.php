<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Siswa;
use App\OrangTua;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orangtua = OrangTua::with('siswa')->get();

        return view('admin.orang-tua.index', compact('orangtua'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('admin.orang-tua.create', compact('siswa'));
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
            'nama_ortu' => 'required',
            'email' => 'required',
            'siswa_id' => 'required',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt('orangtua');
        $user->role = 'orangtua';
        $user->save();

        $ortu = new OrangTua();
        $ortu->user_id = $user->id;
        $ortu->siswa_id = $request->siswa_id;
        $ortu->nama_ortu = $request->nama_ortu;
        $ortu->save();

        return redirect()->route('orang-tua.index')->with('info', 'Data orang tua berhasil disimpan.');
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
        //
    }
}
