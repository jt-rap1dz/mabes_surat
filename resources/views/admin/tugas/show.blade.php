@extends('admin.layouts.app')

@section('konten')

<h1 align="center">Detail Tugas</h1>
@foreach ($tugas as $tug)
{{-- <p>
    {{ $tug->personel }}
</p> --}}
    
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Surat Tugas Diberikan Kepada :</h3>
            <h6 class="card-subtitle">{{ $tug->personel }}</h6>
            <br>
            <a href="{{ url('tugas/cetak_pdf/'.$tug->id) }}" class="btn btn-danger">PDF</a>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="white-box text-center"><img src="{{ asset('admin/img/'.$tug->foto) }}" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">Keterangan Personel</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>
                                <tr>
                                    <td width="390">No Surat</td>
                                    <td>{{ $tug->nomorsurat }}</td>
                                </tr>
                                <tr>
                                    <td>Mulai Tugas</td>
                                    <td>{{ $tug->mulai }}</td>
                                </tr>
                                <tr>
                                    <td>Selesai Tugas</td>
                                    <td>{{ $tug->akhir }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Personel</td>
                                    <td>{{ $tug->personel }}</td>
                                </tr>
                                <tr>
                                    <td>NRP Personel</td>
                                    <td>{{ $tug->nrp }}</td>
                                </tr>
                                <tr>
                                    <td>Pimpinan</td>
                                    <td>{{ $tug->pimpinan }}</td>
                                </tr>
                                <tr>
                                    <td>Wilayah</td>
                                    <td>{{ $tug->wilayah }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endforeach

@endsection