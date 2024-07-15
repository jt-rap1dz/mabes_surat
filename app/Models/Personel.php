<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;
    protected $table = 'personel'; // mengambil table di mysql
    protected $fillable = ['nama', 'nrp', 'alamat', 'agama_id', 'kesatuan_id', 'foto']; // mengambil kolom dari table personel

    // mematikan timestamps created_at dan update_at pada tabel user
    public $timestamps = false;

    //relasi ke table tugas
    public function agama()
    {
        return $this->belongsTo(Agama::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongsTo
        // jika relasi one to one akan dideklarasikan hasOne
    }

    public function kesatuan()
    {
        return $this->belongsTo(Kesatuan::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongsTo
        // jika relasi one to one akan dideklarasikan hasOne
    }
}