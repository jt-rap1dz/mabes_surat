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
                <a href="{{ url('personel/personelPDF') }}" class="btn btn-danger">PDF</a>
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
                            <th>Foto</th>
                            <th></th>
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
                            <th>Foto</th>
                            <th></th>
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
                                <td>
                                    @empty ($per->foto)
                                    <img src="{{ asset('admin/img/noimage.jpg') }}" width="100px">
                                    @else
                                    <img src="{{ asset('admin/img/'.$per->foto) }}" width="100px">
                                    @endempty
                                </td>
                                <td>
                                    <a href="{{ url('personel/show/'.$per->id) }}" class="btn
                                        btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ url('personel/edit/'.$per->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    
                                </td>

                        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
