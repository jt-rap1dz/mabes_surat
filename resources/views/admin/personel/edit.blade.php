@extends('admin.layouts.app')

@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Tambah Personel</h1>

@foreach ($personel as $per)
{{-- melakukan validasi tingkat 2 --}}
@if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form method="POST" action="{{ url('personel/update/'.$per->id) }}"
enctype="multipart/form-data">
@csrf
{{-- multipart/form-data => digunakan untuk menangkap data file atau selain data array --}}
{{-- csrf => digunakan untuk memproteksi form --}}
<div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
    <input id="text1" name="nama" type="text" class="form-control" value="{{ $per->nama }}" required>
    </div>
</div>
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">NRP</label> 
    <div class="col-8">
    <input id="text" name="nrp" type="text" class="form-control" value="{{ $per->nrp }}" required>
    </div>
</div>
<div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
    <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control" required>{{ $per->alamat }}</textarea>
    </div>
</div>
<div class="form-group row">
    <label for="select" class="col-4 col-form-label">Select</label> 
    <div class="col-8">
    <select id="select" name="agama" class="custom-select" required>
        @foreach ($agama as $ag)
        @php $sel = ($ag->id == $per->agama_id) ? 'selected' : ''; @endphp
        <option value="{{ $ag->id }}" {{ $sel }}> {{ $ag->agama }} </option>
        @endforeach
    </select>
    </div>
</div>
<div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Select</label> 
    <div class="col-8">
    <select id="select1" name="kesatuan" class="custom-select" required>
        @foreach ($kesatuan as $ks)
        @php $sel = ($ks->id == $per->kesatuan_id) ? 'selected' : ''; @endphp
        <option value="{{ $ks->id }}" {{ $sel }}> {{ $ks->kesatuan }} </option>
        @endforeach
    </select>
    </div>
</div> 
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
    <input id="text" name="foto" type="file" class="form-control" value="{{ $per->foto }}" required>
    <br>
    @if (!empty($per->foto))
    <img src="{{ url('admin/img') }}/{{ $per->foto }}" alt="" width="100px" height="100px">
    @endif
    </div>
</div>
<div class="form-group row">
    <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endforeach
@endsection