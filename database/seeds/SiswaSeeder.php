<?php

use Illuminate\Database\Seeder;
use App\Siswa;
use App\User;
use App\Kelas;
use App\Jurusan;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new User;
        $siswa->name = "Angga Yutisna";
        $siswa->email = "anggayutisna@gmail.com";
        $siswa->password = bcrypt("angga2020");
        $siswa->save();
        $siswa->attachRole("siswa");



    }
}
