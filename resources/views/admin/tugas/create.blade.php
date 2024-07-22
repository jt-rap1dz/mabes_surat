@extends('admin.layouts.app')

@section('konten')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Tambah Tugas</h1>

@if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form method="POST" action="{{ url('tugas/store') }}"
enctype="multipart/form-data">
@csrf
{{-- multipart/form-data => digunakan untuk menangkap data file atau selain data array --}}
{{-- csrf => digunakan untuk memproteksi form --}}
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nomor Surat</label> 
    <div class="col-8">
    <input id="text" name="nomorsurat" type="text" class="form-control" required><br>
    </div>
    <label for="text" class="col-4 col-form-label">Mulai Tugas</label> 
    <div class="col-8">
    <input id="text" name="mulai" type="date" class="form-control" required><br>
    </div>
    <label for="text" class="col-4 col-form-label">Selesai Tugas</label> 
    <div class="col-8">
    <input id="text" name="akhir" type="date" class="form-control" required><br>
    </div>

    <label for="textarea" class="col-4 col-form-label">Menimbang</label> 
    <div class="col-8">
    <textarea id="textarea" name="menimbang" cols="40" rows="2" class="form-control"></textarea><br>
    </div>
    <label for="textarea" class="col-4 col-form-label">Dasar</label> 
    <div class="col-8">
    <textarea id="textarea" name="dasar" cols="40" rows="2" class="form-control"></textarea><br>
    </div>
    <label for="textarea" class="col-4 col-form-label">Perihal</label> 
    <div class="col-8">
    <textarea id="textarea" name="perihal" cols="40" rows="2" class="form-control"></textarea><br>
    </div>
    <label for="text" class="col-4 col-form-label">Tanggal Pembuatan</label> 
    <div class="col-8">
    <input id="text" name="tglpembuatan" type="date" class="form-control" required><br>
    </div>
    




    <label for="text" class="col-4 col-form-label">Provinsi</label> 
    <div class="col-8">
            <select id="select" name="provinsi" class="custom-select">
                @foreach ($provinsi as $pr)
                <option value="{{ $pr->id }}"> {{ $pr->wilayah }} </option>
                @endforeach
            </select>
    </div><br><br>
    <label for="text" class="col-4 col-form-label">Personel</label> 
    <div class="col-8">
        <select id="select2" name="personel" class="custom-select">
            @foreach ($personel as $per)
            <option value="{{ $per->id }}"> {{ $per->nama }} </option>
            @endforeach
        </select>
    </div><br><br>
    <label for="text" class="col-4 col-form-label">Pimpinan</label> 
    <div class="col-8">
        <select id="select2" name="pimpinan" class="custom-select">
            @foreach ($pimpinan as $pim)
            <option value="{{ $pim->id }}"> {{ $pim->namapimpinan }} </option>
            @endforeach
        </select>
    </div>
</div> 

{{-- letak form foto --}}
<div class="form-group row">
    <label for="text" class="col-4 col-form-label">Foto</label>
    <div class="col-8">
        <input type="file" name="foto" class="form-control-file" required><br>
    </div>
</div>



<div class="form-group row">
    <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection