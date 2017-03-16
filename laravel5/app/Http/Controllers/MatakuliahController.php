<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
    {
    	return "Selamat Datang di Tabel Mata Kuliah. Pilih Matakuliah yang Anda Sukai. Ganbatte :)";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new Matakuliah();
    	$matakuliah->title = 'Pemrograman Framework';
    	$matakuliah->keterangan = 'Selamat Berpusing Ria :) Semoga Dimudahkan';
    	$matakuliah->save();
    	return "Data Matakuliah dengan title {$matakuliah->title} telah disimpan";
    }
}
