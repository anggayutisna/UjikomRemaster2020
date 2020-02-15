<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Jurusan;
use App\Kelas;
use App\User;
use App\Nilai;

class FrontendController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();

        return view('frontend.home', compact('siswa'));
    }

    public function siswa(Siswa $siswa)
    {
        $siswa = Siswa::where('nama_siswa', $siswa->nama_siswa)->get();
        return view('frontend.Siswa.index', compact('siswa'));
    }
}
