<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMataKuliah;

class JadwalMataKuliahController extends Controller
{
    public function JadwalMataKuliah(){
        $JadwalMataKuliah = JadwalMataKuliah::all();
        // dd($JadwalMataKuliah);
        foreach($JadwalMataKuliah as $jadwalmatkul){

        echo "Nama Mahasiswa : ".$jadwalmatkul->mahasiswa->nama;
        echo "<br>";
        echo "Ruangan : ".$jadwalmatkul->ruangan->title;
        echo "<br>";
        echo "Nama Dosen : ".$jadwalmatkul->dosen_matakuliah->dosen->nama;
        echo "<br>";
        echo "Mata Kuliah yang diajar : ".$jadwalmatkul->dosen_matakuliah->matakuliah->title;
        echo "<br>";
        }
    }
    public function awal()
    {
    	return "Ini Tabel Jadwal MataKuliah. Salam dari JadwalMataKuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jmk = new JadwalMataKuliah();
    	$jmk->mahasiswa_id = '1';
    	$jmk->ruangan_id = '1';
    	$jmk->dosen_matakuliah_id = '2';
    	$jmk->save();
    	return "Data Jadwal dengan ID Mahasiswa {$jmk->mahasiswa_id} Ruangan dengan ID {$jmk->ruangan_id} dan Dosen Matakuliah dengan ID {$jmk->dosen_matakuliah_id} telah disimpan";
    }
}
