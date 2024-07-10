<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimpinan extends Model
{
    use HasFactory;
    protected $table = 'pimpinan'; // mengambil table di mysql
    protected $fillable = ['namapimpinan', 'pangkat', 'nrp', 'jabatan']; // mengambil kolom dari table pimpinan

    // mematikan timestamps created_at dan update_at pada tabel user
    public $timestamps = false;

    //relasi ke table tugas
    public function tugas()
    {
        return $this->hasOne(Tugas::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongTo
        // jika relasi one to one akan dideklarasikan hasOne
    }
}