@extends('admin.layouts.app')

@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Tambah Tugas</h1>

<form method="POST" action="{{ url('tugas/store') }}"
enctype="multipart/form-data">
@csrf
{{-- multipart/form-data => digunakan untuk menangkap data file atau selain data array --}}
{{-- csrf => digunakan untuk memproteksi form --}}
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tugas</label> 
    <div class="col-8">
    <input id="text" name="tugas" type="text" class="form-control" required><br>
    </div>
    <label for="text" class="col-4 col-form-label">Nomor Surat</label> 
    <div class="col-8">
    <input id="text" name="nomor" type="text" class="form-control" required><br>
    </div>
    <label for="text" class="col-4 col-form-label">Mulai</label> 
    <div class="col-8">
    <input id="text" name="mulai" type="date" class="form-control" required><br>
    </div>
    <label for="text" class="col-4 col-form-label">Akhir</label> 
    <div class="col-8">
    <input id="text" name="akhir" type="date" class="form-control" required><br>
    </div>
    <label for="text" class="col-4 col-form-label">Provinsi</label> 
    <div class="col-8">
    <input id="text" name="provinsi" type="text" class="form-control" required><br>
    </div><label for="text" class="col-4 col-form-label">Personel</label> 
    <div class="col-8">
    <input id="text" name="personel" type="text" class="form-control" required><br>
    </div>
    <label for="text" class="col-4 col-form-label">Pimpinan</label> 
    <div class="col-8">
    <input id="text" name="pimpinan" type="text" class="form-control" required><br>
    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection