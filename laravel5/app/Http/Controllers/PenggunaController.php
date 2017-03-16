<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
    public function awal()
    {
    	return "Hello dari PenggunaControlller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pengguna = new Pengguna();
    	$pengguna->username = 'Amrina Rasyada';
    	$pengguna->password = '1515015079';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
    }
}

