<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas; // ini memanggil file model Tugas
use App\Models\Provinsi; // ini memanggil file model Provinsi
use App\Models\Personel; // ini memanggil file model Personel
use App\Models\Pimpinan; // ini memanggil file model Pimpinan
use DB; // tipe kodingan untuk memakai library database query builder
// atau menggunakan
//use illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tugas = DB::table('tugas')->get();
        $tugas = Tugas::join('pimpinan', 'pimpinan_id', '=', 'pimpinan.id')
            ->join('provinsi', 'provinsi_id', '=', 'provinsi.id')
            ->join('personel', 'personel_id', '=', 'personel.id')
            ->select('tugas.*', 'pimpinan.namapimpinan as pimpinan', 'provinsi.wilayah as provinsi', 'personel.nama as personel')
            ->get();
        //variabel keastuan menyimpan data table tugas yang diambil
        //dari model tugas.php
        return view('admin.tugas.index', compact('tugas')); //compact untuk menampilkan data table
        //return view mengarahakan ke folder admin/tugas/index.blade.php
        //sekaligus mengirimkan variable $tugas
        //melalui compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pimpinan = DB::table('pimpinan')->get();
        $provinsi = DB::table('provinsi')->get();
        $personel = DB::table('personel')->get();

        return view('admin.tugas.create', compact('pimpinan', 'provinsi', 'personel'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomorsurat' => 'required|unique:tugas|min:6',
            'mulai' => 'required',
            'akhir' => 'required'
        ],
        [
            'nomorsurat.required' => 'Nomor Surat Tugas harus diisi',
            'nomorsurat.unique' => 'Nomor Surat Tugas sudah ada',
            'nomorsurat.min' => 'NRP minimal 6 karakter',
            'mulai.required' => 'Tanggal Mulai harus diisi',
            'akhir.required' => 'Tanggal Akhir harus diisi'
        ]
    
    );
            DB::table('tugas')->insert([
            'nomorsurat' => $request->nomorsurat,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'provinsi_id' => $request->provinsi,
            'personel_id' => $request->personel,
            'pimpinan_id' => $request->pimpinan,
        //kode diatas menyesuaikan dengan kolom yang ada di tabel tugas
    ]);
    // jika berhasil menambahkan tugas maka akan diarahkan kembali ke
    //tampil tugas/index
    return redirect('tugas');
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