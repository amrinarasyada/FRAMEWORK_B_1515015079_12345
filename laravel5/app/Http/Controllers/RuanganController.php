<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
    public function awal()
    {
    	return "Selamat Datang di Ruangan Belajar. Pilih yang fasilitasnya lengkap ya. Ganbatte :)";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new Ruangan();
    	$ruangan->title = 'Ber-AC (Doakan aja kita punya) :)';
    	$ruangan->save();
    	return "Data Ruangan {$ruangan->title} telah disimpan";
    }
}
