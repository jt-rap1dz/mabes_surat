<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tembusan extends Model
{
    use HasFactory;
    protected $table = 'tembusan';
    protected $fillable = ['jabatan', 'tugas_id'];
    public $timestamps = false;
}
