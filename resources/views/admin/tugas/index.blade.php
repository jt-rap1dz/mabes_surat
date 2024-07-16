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
                            <th>Action</th>
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
                            <th>Action</th>
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
                                <td>
                                    <a href="{{ url('tugas/show/'.$tug->id) }}" class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $tug->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $tug->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Akan Dihapus</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Apakah anda yakin menghapus data {{ $tug->personel }}
                                            </div>
                                            
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                            <a href="{{ url('tugas/delete/'.$tug->id) }}">
                                            <button type="button" class="btn btn-primary">Ya</button>
                                            </a>
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
