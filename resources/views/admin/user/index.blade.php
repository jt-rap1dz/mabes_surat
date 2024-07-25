@extends('admin.layouts.app')

@section('konten')
<div class="container-fluid px-4">
    <h1 class="mt-4">Hak Akses</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Hak Akses</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('agama/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aktivasi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aktivasi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no=1 @endphp
                    @foreach ($userAll as $u )
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->role}}</td>
                        @if($u->is_active == true)
                        <td>Active</td>
                        @else
                        <td>
                        <form action="{{ route('user.activate', $u->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-primary">Terima</button>
                        </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection