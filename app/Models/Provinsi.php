<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi'; // mengambil table di mysql
    protected $fillable = ['wilayah']; // mengambil kolom dari table personel

    // mematikan timestamps created_at dan update_at pada tabel user
    public $timestamps = false;

}
