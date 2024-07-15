<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas'; // mengambil table di mysql
    protected $fillable = ['nomorsurat', 'mulai', 'akhir', 'provinsi_id', 'personel_id', 'pimpinan_id']; // mengambil kolom dari table tugas

    // mematikan timestamps created_at dan update_at pada tabel user
    public $timestamps = false;

    //relasi ke table tugas
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongsTo
        // jika relasi one to one akan dideklarasikan hasOne
    }
    public function personel()
    {
        return $this->belongsTo(Personel::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongsTo
        // jika relasi one to one akan dideklarasikan hasOne
    }
    public function pimpinan()
    {
        return $this->hasOne(Pimpinan::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongsTo
        // jika relasi one to one akan dideklarasikan hasOne
    }
}
