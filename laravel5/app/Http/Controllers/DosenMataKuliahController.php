<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMataKuliah;

class DosenMataKuliahController extends Controller
{
    public function DosenMataKuliah(){
        $DosenMataKuliah = Dosen_MataKuliah::all();

        foreach($DosenMataKuliah as $dsnmatkul){

        echo "Nama Dosen : ".$dsnmatkul->dosen->nama;
        echo "<br>";
        echo "NIP : ".$dsnmatkul->dosen->nip;
        echo "<br>";
        echo "Mata Kuliah yang diajar : ".$dsnmatkul->matakuliah->title;
        echo "<br>";
        }
    }

   public function awal()
    {
    	return "Ini Tabel Dosen MataKuliah. Salam dari DosenMataKuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dmk = new DosenMataKuliah();
    	$dmk->dosen_id = '1';
    	$dmk->matakuliah_id = '1';
    	$dmk->save();
    	return "Data Dosen dengan ID {$dmk->dosen_id} dan Matakuliah dengan ID {$dmk->matakuliah_id} telah disimpan";
    }
}