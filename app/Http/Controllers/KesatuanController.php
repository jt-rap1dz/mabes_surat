<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kesatuan; // ini memanggil file model kesatuan
use DB; // tipe kodingan untuk memakai library database query builder
// atau menggunakan
//use illuminate\Support\Facades\DB;

class KesatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kesatuan = DB::table('kesatuan')->get();
        //variabel keastuan menyimpan data table kesatuang yang diambil
        //dari model kesatuan.php
        return view('admin.kesatuan.index', compact ('kesatuan')); //compact untuk menampilkan data table
        //return view mengarahakan ke folder admin/kesatuan/index.blade.php
        //sekaligus mengirimkan variable $kesatuan
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