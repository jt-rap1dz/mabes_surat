<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pimpinan; // ini memanggil file model pimpinan
use DB; // tipe kodingan untuk memakai library database query builder
// atau menggunakan
//use illuminate\Support\Facades\DB;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pimpinan = DB::table('pimpinan')->get();
        //variabel keastuan menyimpan data table pimpinan yang diambil
        //dari model pimpinan.php
        return view('admin.pimpinan.index', compact('pimpinan')); //compact untuk menampilkan data table
        //return view mengarahakan ke folder admin/pimpinan/index.blade.php
        //sekaligus mengirimkan variable $pimpinan
        //melalui compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pimpinan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('pimpinan')->insert([
            'namapimpinan' => $request->nama,
            'pangkat' => $request->pangkat,
            'nrp' => $request->nrp,
            'jabatan' => $request->jabatan,
        //kode diatas menyesuaikan dengan kolom yang ada di tabel pimpinan
    ]);
    // jika berhasil menambahkan pimpinan maka akan diarahkan kembali ke
    //tampil pimpinan/index
    return redirect('pimpinan');
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