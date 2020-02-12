<?php

use Illuminate\Database\Seeder;
use App\Mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel = new Mapel;

        $mapel->mata_pelajaran = "Matematika";
        $mapel->save();

        $mapel = new Mapel;

        $mapel->mata_pelajaran = "Pendidikan Agama Islam";
        $mapel->save();

        $mapel = new Mapel;

        $mapel->mata_pelajaran = "Bahasa Indonesia";
        $mapel->save();

        $mapel = new Mapel;

        $mapel->mata_pelajaran = "Bahasa Inggris";
        $mapel->save();
    }
}
