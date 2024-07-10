<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimpinan extends Model
{
    use HasFactory;
    protected $table = 'pimpinan'; // mengambil table di mysql
    protected $fillable = ['namapimpinan']; // mengambil kolom dari table pimpinan
    protected $fillable = ['pangkat'];
    protected $fillable = ['nrp'];
    protected $fillable = ['jabatan'];
    
    // mematikan timestamps created_at dan update_at pada tabel user
    public $timestamps = false;

    //relasi ke table personel
    public function tugas()
    {
        return $this->hasOne(Tugas::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongTo
        // jika relasi one to one akan dideklarasikan hasOne
    }
}