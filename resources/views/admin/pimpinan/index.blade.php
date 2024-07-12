@extends('admin.layouts.app')

@section('konten')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tabel Pimpinan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tabel Pimpinan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('pimpinan/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pimpinan</th>
                        <th>Pangkat</th>
                        <th>NRP</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Pimpinan</th>
                        <th>Pangkat</th>
                        <th>NRP</th>
                        <th>Jabatan</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no=1 @endphp
                    @foreach ($pimpinan as $pim )
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$pim->namapimpinan}}</td>
                        <td>{{$pim->pangkat}}</td>
                        <td>{{$pim->nrp}}</td>
                        <td>{{$pim->jabatan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection