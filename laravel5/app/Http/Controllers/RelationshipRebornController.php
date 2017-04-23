<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;
class RelationshipRebornController extends Controller
{
    public function ujihas()
    {
    	return dosen::has('dosen_matakuliah')->get();
    }

    public function ujidoesnthave()
    {
    	return dosen::doesnthave('dosen_matakuliah')->get();
    	dd($data);
    }
     public function matkuldoesnthave()
    {
    	return matakuliah::doesnthave('dosen_matakuliah')->get();
    	dd($data);
    }
}
