@extends('admin.layouts.app')

@section('konten')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tabel Personel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tabel Personel</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about
                DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Kesatuan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Kesatuan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no=1 @endphp
                        @foreach ($personel as $per)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $per->nama }}</td>
                                <td>{{ $per->nrp }}</td>
                                <td>{{ $per->alamat }}</td>
                                <td>{{ $per->agama }}</td>
                                <td>{{ $per->kesatuan}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
