@extends('admin.layouts.app')

@section('konten')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tabel Kesatuan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tabel Kesatuan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('kesatuan/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kesatuan</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kesatuan</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no=1 @endphp
                    @foreach ($kesatuan as $k )
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$k->kesatuan}}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $k->id }}">Edit
                            </button>
                            
                            <div class="modal fade" id="exampleModal{{ $k->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                        </div>
                                        <div class="modal-body"> Apakah anda yakin untuk
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                            </button>
                                            <a href="{{ url('kesatuan/delete/'. $k->id) }}" class="btn btn danger">Delete</a>

                                        </div>


                                    </div>


                                </div>



                            </div>




                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection