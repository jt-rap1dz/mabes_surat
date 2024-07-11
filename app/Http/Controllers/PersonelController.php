<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel; // ini memanggil file model personel
use App\Models\Kesatuan; // ini memanggil file model kesatuan
use App\Models\Agama; // ini memanggil file model agama
use DB; // tipe kodingan untuk memakai library database query builder
// atau menggunakan
//use illuminate\Support\Facades\DB;

class PersonelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personel = Personel::join('agama', 'agama_id', '=', 'agama_id')
            ->join('kesatuan', 'kesatuan_id', '=', 'kesatuan_id')
            ->select('personel.*', 'agama.agama', 'kesatuan.kesatuan')
            ->get();

        //variabel keastuan menyimpan data table pimpinan yang diambil
        //dari model personel.php
        return view('admin.personel.index', compact('personel')); //compact untuk menampilkan data table
        //return view mengarahakan ke folder admin/personel/index.blade.php
        //sekaligus mengirimkan variable $personel
        //melalui compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}