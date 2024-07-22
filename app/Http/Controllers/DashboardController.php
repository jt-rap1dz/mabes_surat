<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;
use App\Models\Pimpinan;
use App\Models\Tembusan;
use App\Models\Tugas;

class DashboardController extends Controller
{
    //
    public function index() {
        $pimpinan = Pimpinan::count();
        $personel = Personel::count();
        $tugas = Tugas::count();
        $tembusan = Tembusan::count();

        $tugas2 = Tugas::Join('pimpinan', 'tugas.pimpinan_id', '=', 'pimpinan.id')
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
        ->get();

        return view('admin.dashboard', compact('pimpinan', 'personel', 'tugas', 'tembusan', 'tugas2'));

    }
}