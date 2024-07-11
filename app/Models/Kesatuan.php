<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesatuan extends Model
{
    use HasFactory;
    protected $table = 'kesatuan'; // mengambil table di mysql
    protected $fillable = ['kesatuan']; // mengambil kolom dari table kesatuan
    // mematikan timestamps created_at dan update_at pada tabel user
    public $timestamps = false ;

    //relasi ke table personel
    public function personel(){
        return $this->hasMany(Personel::class);
        // jika relasi one to many akan dideklarasikan hasMany
        // jika relasi many to one akan dideklarasikan belongsTo
        // jika relasi one to one akan dideklarasikan hasOne
    }
}