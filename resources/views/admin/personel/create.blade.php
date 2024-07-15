@extends('admin.layouts.app')

@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Tambah Personel</h1>

@if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form method="POST" action="{{ url('personel/store') }}"
enctype="multipart/form-data">
@csrf
{{-- multipart/form-data => digunakan untuk menangkap data file atau selain data array --}}
{{-- csrf => digunakan untuk memproteksi form --}}
<div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
    <input id="text1" name="nama" type="text" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">NRP</label> 
    <div class="col-8">
    <input id="text" name="nrp" type="text" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
    <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="select" class="col-4 col-form-label">Select</label> 
    <div class="col-8">
    <select id="select" name="agama" class="custom-select" required>
        @foreach ($agama as $ag)
        <option value="{{ $ag->id }}"> {{ $ag->agama }} </option>
        @endforeach
    </select>
    </div>
</div>
<div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Select</label> 
    <div class="col-8">
    <select id="select1" name="kesatuan" class="custom-select" required>
        @foreach ($kesatuan as $ks)
        <option value="{{ $ks->id }}"> {{ $ks->kesatuan }} </option>
        @endforeach
    </select>
    </div>
</div> 
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
    <input id="text" name="foto" type="file" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection