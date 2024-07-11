<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama; // ini memanggil file model agama
use DB; // tipe kodingan untuk memakai library database query builder
// atau menggunakan
//use illuminate\Support\Facades\DB;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agama = DB::table('agama')->get();
        //variabel keastuan menyimpan data table agama yang diambil
        //dari model agama.php
        return view('admin.agama.index', compact('agama')); //compact untuk menampilkan data table
        //return view mengarahakan ke folder admin/agama/index.blade.php
        //sekaligus mengirimkan variable $agama
        //melalui compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agama.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::table('agama')->insert(['agama' => $request->agama1,
        //kode diatas menyesuaikan dengan kolom yang ada di tabel agama
    ]);
    // jika berhasil menambahkan agama maka akan diarahkan kembali ke
    //tampil agama/index
    return redirect('agama');
        
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