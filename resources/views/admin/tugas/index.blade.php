@extends('admin.layouts.app')

@section('konten')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tabel Tugas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tabel Pimpinan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ url('tugas/create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Mulai</th>
                            <th>Akhir</th>
                            <th>Provinsi</th>
                            <th>Personel</th>
                            <th>Pimpinan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Mulai</th>
                            <th>Akhir</th>
                            <th>Provinsi</th>
                            <th>Personel</th>
                            <th>Pimpinan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no=1 @endphp
                        @foreach ($tugas as $tug)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $tug->nomorsurat }}</td>
                                <td>{{ $tug->mulai }}</td>
                                <td>{{ $tug->akhir }}</td>
                                <td>{{ $tug->provinsi }}</td>
                                <td>{{ $tug->personel }}</td>
                                <td>{{ $tug->pimpinan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
