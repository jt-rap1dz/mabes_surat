@extends('admin.layouts.app')

@section('konten')

<h1 align="center">Edit Tugas</h1>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@foreach($tugas as $t)
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="POST" action="{{url('tugas/update/'.$t->id)}}" 
enctype="multipart/form-data">
@csrf
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">No Surat</label> 
    <div class="col-8">
      <input id="text" name="nomorsurat" type="text" 
      class="form-control" value="{{$t->nomorsurat}}" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Mulai Tugas</label> 
    <div class="col-8">
      <input id="text1" name="mulai" type="date" 
      class="form-control" value="{{$t->mulai}}" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Selesai Tugas</label> 
    <div class="col-8">
      <input id="text2" name="akhir" type="date"
       class="form-control" value="{{$t->akhir}}" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Menimbang</label> 
    <div class="col-8">
    <textarea id="content" name="menimbang" cols="40" rows="2" class="form-control">{{$t->menimbang}}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Dasar</label> 
    <div class="col-8">
    <textarea id="dasar" name="dasar" cols="40" rows="2" class="form-control">{{$t->dasar}}</textarea>
  </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Perihal</label> 
    <div class="col-8">
    <textarea id="perihal" name="perihal" cols="40" rows="2" class="form-control">{{$t->perihal}}</textarea>
  </div>
  </div>


  
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Provinsi</label> 
    <div class="col-8">
      <select id="select" name="provinsi_id" class="custom-select">
        @foreach($provinsi as $p)
@php $sel = ($p->id == $t->provinsi_id) ? 'selected': '';
@endphp
    <option value="{{$p->id}}" {{$sel}}>{{$p->wilayah}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Personel</label> 
    <div class="col-8">
      <select id="select1" name="personel_id" class="custom-select">
        @foreach($personel as $p)
@php $sel = ($p->id == $t->personel_id) ? 'selected': '';
@endphp
        <option value="{{$p->id}}" {{$sel}}>{{$p->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="select2" class="col-4 col-form-label">Pimpinan</label> 
    <div class="col-8">
      <select id="select2" name="pimpinan_id" class="custom-select">
      @foreach($pimpinan as $p)
@php $sel = ($p->id == $t->pimpinan_id) ? 'selected': '';
@endphp
        <option value="{{$p->id}}" {{$sel}}>{{$p->namapimpinan}}</option>
        @endforeach
      </select>
    </div>
  </div> 

  <!-- letak form foto -->
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text1" name="foto" type="file"
       class="form-control" value="{{$t->foto}}">
       @if(!empty($t->foto))
       <img src="{{url('admin/img')}}/{{$t->foto}}" alt=""
       width="20%">
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