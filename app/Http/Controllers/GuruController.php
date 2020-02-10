<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Mapel;
use Session;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\Jobs\SyncJob;
use Illuminate\Support\Str;
$random = Str::random(40);

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::orderBy('created_at', 'desc')->get();
        return view('backend.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::all();
        $guru = Guru::all();
        return view('backend.guru.create', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru;
        $guru->nama_guru = $request->nama_guru;
        $guru->tempat_tinggal = $request->tempat_tinggal;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->no_telpon = $request->no_telpon;
        $guru->email = $request->email;
        $guru->password = $request->password;
        $guru->mapel_id = $request->mapel;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/guru/';
            $filename = Str::random(40) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $guru->foto = $filename;
        }

        $guru->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data guru bernama <b>$guru->nama_guru</b>!"
        ]);
        return redirect()->route('guru.index');

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
        $guru = Guru::findOrFail($id);
        $mapel = Mapel::all();
        return view('backend.guru.edit', compact('mapel', 'guru'));
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
        $guru = Guru::findOrFail($id);
        $guru->nama_guru = $request->nama_guru;
        $guru->tempat_tinggal = $request->tempat_tinggal;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->no_telpon = $request->no_telpon;
        $guru->email = $request->email;
        $guru->password = $request->password;
        $guru->mapel_id = $request->mapel;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/guru/';
            $filename = Str::random(40) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $guru->foto = $filename;
        }

        $guru->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data guru bernama <b>$guru->nama_guru</b>!"
        ]);
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index');
    }
}
