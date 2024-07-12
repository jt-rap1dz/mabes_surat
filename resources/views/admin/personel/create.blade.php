@extends('admin.layouts.app')

@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Tambah Personel</h1>

<form method="POST" action="{{ url('personel/store') }}"
enctype="multipart/form-data">
@csrf
{{-- multipart/form-data => digunakan untuk menangkap data file atau selain data array --}}
{{-- csrf => digunakan untuk memproteksi form --}}
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
    <input id="text" name="nama" type="text" class="form-control" required>
    </div>
</div> 
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">NRP</label> 
    <div class="col-8">
    <input id="text" name="nrp" type="text" class="form-control" placeholder="Masukkan NRP" required>
    </div>
</div> 
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
    <input id="text" name="alamat" type="text" class="form-control" required>
    </div>
</div> 
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Agama</label> 
    <div class="col-8">
    <input id="text" name="agama" type="text" class="form-control" required>
    </div>
</div> 
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Kesatuan</label> 
    <div class="col-8">
    <input id="text" name="kesatuan" type="text" class="form-control" required>
    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection