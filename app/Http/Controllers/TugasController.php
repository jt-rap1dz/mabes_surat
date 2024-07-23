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
use App\Models\Tembusan;
use PDF;

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

    // letak code foto di function store
    if(!empty($request->foto)){ //jika tidak kosong maka request foto
        $fileName = 'foto-'.uniqid() .'.'.$request->foto->extension();
        // var fileName menyimpan nama foto dengan extension apa saja
        $request->foto->move(public_path('admin/img'), $fileName);
    } else {
        // jika formnya kosong maka fotonyya juga kosong
        $fileName = '';
    }

    
    
            DB::table('tugas')->insert([
            'nomorsurat' => $request->nomorsurat,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'menimbang' => $request->menimbang,
            'dasar' => $request->dasar,
            'perihal' => $request->perihal,
            'tglpembuatan' => $request->tglpembuatan,
            'provinsi_id' => $request->provinsi,
            'personel_id' => $request->personel,
            'pimpinan_id' => $request->pimpinan,
            'foto' => $fileName,
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
        $tugas = Tugas::join('pimpinan', 'pimpinan_id', '=', 'pimpinan.id')
            ->join('provinsi', 'provinsi_id', '=', 'provinsi.id')
            ->join('personel', 'personel_id', '=', 'personel.id')
            ->select('tugas.*', 'pimpinan.namapimpinan as pimpinan', 'pimpinan.jabatan', 'pimpinan.pangkat', 'provinsi.wilayah as provinsi', 'personel.nama as personel', 'personel.nrp', 'provinsi.wilayah')
            ->where('tugas.id', $id)
            ->get();

        return view('admin.tugas.show', compact('tugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pimpinan = DB::table('pimpinan')->get();
        $provinsi = DB::table('provinsi')->get();
        $personel = DB::table('personel')->get();
        $tugas = DB::table('tugas')->where('id', $id)->get();
        return view('admin.tugas.edit', 
        compact('pimpinan', 'provinsi', 'personel', 'tugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomorsurat' => 'required',
            'mulai' => 'required',
            'akhir' => 'required'
        ],
        [
            'no_surat.required' => 'Nomor Surat Wajib Diisi',
            'mulai.required' => 'Tanggal mulai wajib diisi',
            'akhir.required' => 'Tanggal akhir wajib diisi'
        ]
        
        );
// deklarasi table tugas foto sesuai id menggunakan first()
//tujuannya => ketika foto tidak diupdate, maka foto tidak
//berubah
        // first hanya satu data yang diambil 
        //get biasanya mengambil semua sesuai kondisi
$tugas = DB::table('tugas')->where('id', $id)->first();
//jika foto sudah ada maka hapus foto lama
if($request->hasFile('foto')){
if(!empty($tugas->foto)){
    unlink(public_path('admin/img/' . $tugas->foto));
}
//tambahkan foto baru
$fileName = 'foto-'. $id . '.' .$request->foto->extension();
//var fileName menyimpan nama foto dengan extension apa saja 
$request->foto->move(public_path('admin/img'), $fileName);
} else {
    //jika fotonya tidak diubah maka biarkan fotonya
    $fileName = $tugas->foto;
}

        DB::table('tugas')->where('id', $id)->update([
            'nomorsurat' => $request->nomorsurat,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'menimbang' => $request->menimbang,
            'dasar' => $request->dasar,
            'perihal' => $request->perihal,
            'tglpembuatan' => $request->tglpembuatan,
            'provinsi_id'=> $request->provinsi_id,
            'personel_id' => $request->personel_id,
            'pimpinan_id' => $request->pimpinan_id,
            'foto' => $fileName
        ]);
        //jika berhasil menambahkan agama maka akan diarahkan kembali
        return redirect('tugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tugas')->where('id', $id)->delete();
        
        return redirect('tugas');
    }

    public function cetak_pdf($id)
    {
        $tugas = Tugas::leftJoin('tembusan', 'tugas.id', '=', 'tembusan.tugas_id')
        ->join('pimpinan', 'tugas.pimpinan_id', '=', 'pimpinan.id')
        ->join('personel', 'tugas.personel_id', '=', 'personel.id')
        ->join('provinsi', 'tugas.provinsi_id', '=', 'provinsi.id')
        ->select(
            'tugas.*',
            'pimpinan.namapimpinan as pimpinan',
            'pimpinan.jabatan',
            'pimpinan.pangkat',
            'pimpinan.nrp as pimpinan_nrp',
            'personel.nama as personel',
            'personel.nrp',
            'provinsi.wilayah'
        )
        ->where('tugas.id', $id)
        ->first();

    $tembusan = DB::table('tembusan')->where('tugas_id', $id)->get();
    $pdf = Pdf::loadView('admin.tugas.tugasPDF', compact('tugas', 'tembusan'));

    return $pdf->stream('tugas.pdf');
    }
}