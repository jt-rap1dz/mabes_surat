<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel; // ini memanggil file model personel
use App\Models\Kesatuan; // ini memanggil file model kesatuan
use App\Models\Agama; // ini memanggil file model agama
use DB; // tipe kodingan untuk memakai library database query builder
// atau menggunakan
//use illuminate\Support\Facades\DB;
use PDF;

class PersonelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personel = Personel::join('agama', 'agama_id', '=', 'agama.id')
            ->join('kesatuan', 'kesatuan_id', '=', 'kesatuan.id')
            ->select('personel.*', 'agama.agama', 'kesatuan.kesatuan')
            ->orderBy('id', 'desc')
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
        // panggil data agama dan kesatuan
        $agama = DB::table('agama')->get();
        $kesatuan = DB::table('kesatuan')->get();
        return view('admin.personel.create', compact('agama', 'kesatuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:2|string',
            'nrp' => 'required|unique:personel|min:6',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ],
        [
            'nama.required' => 'Nama harus diisi',
            'nama.min' => 'Nama minimal 2 karakter',
            'nrp.required' => 'NRP harus diisi',
            'nrp.unique' => 'NRP sudah ada',
            'nrp.min' => 'NRP minimal 6 karakter',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berupa jpg, jpeg, png, svg, gif',
            'foto.max' => 'Foto maksimal 2 MB',

        ]
    
    );

    // untuk mengeksekusi foto ke folder public
    if(!empty($request->foto)){ //jika tidak kosong maka request foto
        $fileName = 'foto-'.uniqid() .'.'.$request->foto->extension();
        // var fileName menyimpan nama foto dengan extension apa saja
        $request->foto->move(public_path('admin/img'), $fileName);
    } else {
        // jika formnya kosong maka fotonyya juga kosong
        $fileName = '';
    }




        DB::table('personel')->insert([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'alamat' => $request->alamat,
            'agama_id' => $request->agama,
            'kesatuan_id' => $request->kesatuan,
            'foto' => $fileName,
        //kode diatas menyesuaikan dengan kolom yang ada di tabel personel
    ]);
    // jika berhasil menambahkan personel maka akan diarahkan kembali ke
    //tampil personel/index
    return redirect('personel');
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
        $agama = DB::table('agama')->get();
        $kesatuan = DB::table('kesatuan')->get();
        $personel = DB::table('personel')->where('id', $id)->get();
        
        return view('admin.personel.edit', compact('agama', 'kesatuan', 'personel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!empty($request->foto)){ //jika tidak kosong maka request foto
            $fileName = 'foto-'.uniqid() .'.'.$request->foto->extension();
            // var fileName menyimpan nama foto dengan extension apa saja
            $request->foto->move(public_path('admin/img'), $fileName);
        } else {
            // jika formnya kosong maka fotonyya juga kosong
            $fileName = '';
        }


        DB::table('personel')->where('id', $id)->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'alamat' => $request->alamat,
            'agama_id' => $request->agama,
            'kesatuan_id' => $request->kesatuan,
            'foto' => $fileName
        ]);

        return redirect('personel');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function personelPDF() 
    {
        $personel = DB::table('personel')->get();
        $pdf = Pdf::loadView('admin.personel.personelPDF', compact('personel'));

        return $pdf->stream('personel.pdf');
    }

}