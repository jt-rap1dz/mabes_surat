@extends('admin.layouts.app')

@section('konten')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tabel Personel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tabel Personel</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('personel/create') }}" class="btn btn-primary">Tambah</a>
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
