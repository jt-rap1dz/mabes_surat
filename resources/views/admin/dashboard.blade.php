@extends('admin.layouts.app')

@section('konten')
<h1 class="mt-4">Dashboard</h1>
@if (Auth::user()->role =='admin')
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Personel : {{ $personel }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('personel') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Tugas : {{ $tugas }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('tugas') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Pimpinan : {{ $pimpinan }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ url('pimpinan') }}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Tembusan : {{ $tembusan }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    @if (Auth::user()->role =='admin')
                                    <th>No</th>
                                    @endif
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
                                    @if (Auth::user()->role =='admin')
                                    <th>No</th>
                                    @endif
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
                                @if (Auth::user()->role =='admin')
                                @php $no=1 @endphp
                                @foreach ($tugas2 as $tug)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $tug->nomorsurat }}</td>
                                        <td>{{ $tug->mulai }}</td>
                                        <td>{{ $tug->akhir }}</td>
                                        <td>{{ $tug->wilayah }}</td>
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
                                @else
                                @foreach ($tugas2 as $tug)
                                @if($tug->user_id == Auth::user()->id)
                                    <tr>
                                        
                                        <td>{{ $tug->nomorsurat }}</td>
                                        <td>{{ $tug->mulai }}</td>
                                        <td>{{ $tug->akhir }}</td>
                                        <td>{{ $tug->wilayah }}</td>
                                        <td>{{ $tug->personel }}</td>
                                        <td>{{ $tug->pimpinan }}</td>
                                        <td>
                                            
                                            @if(!empty($tug->foto))
                                            <a href="{{ url('admin/img')}}/{{ $tug->foto }}" class="btn btn-primary btn-sm" download>
                                            Download Foto</a>
                                            @else
                                            {{-- <a href="#" class="btn btn-primary btn-sm" disabled>Surat Belum Terbit</a> --}}
                                            <span>Surat Belum Terbit</span>
                                            @endif
                                            

                                        </td>
                                        {{-- endif user_id --}}
                                        @endif 
                                        @endforeach
                                        {{-- endif role==admin --}}
                                        @endif
                            </tbody>
                        </table>


@endsection