<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMataKuliah extends Model
{
	public function dosen(){
    	return $this->belongsTo(Dosen::class);
    }
    public function matakuliah(){
    	return $this->belongsTo(MataKuliah::class);
    }
    public function Jadwalmatakuliah(){
    	return $this->hasMany(JadwalMataKuliah::class);
    }
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
}
