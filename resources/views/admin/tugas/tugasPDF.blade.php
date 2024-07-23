<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Surat Perintah</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Untuk memastikan konten berada di tengah vertikal */
    }
    .container {
        width: 800px; /* Lebar A4 dalam pixel */
        padding: 50px 50px; /* Padding untuk memperbaiki tampilan */
        box-sizing: border-box; /* Menyertakan padding dalam perhitungan lebar */
        background-color: #fff; /* Menambahkan warna latar belakang */
        box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Menambahkan bayangan untuk efek 3D */
    }
    .header {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 20px;
    position: absolute;
    top: 15px;
    left: 40px;
}
        

    
    .content {
        font-size: 16px;
        line-height: 1.5;
        text-align: justify;
        margin-bottom: 20px;
        position: absolute;
        left: 40px;
        right: 20px;
    }
    
    .signature {
        text-align: right;
        margin-top: 20px;
    }
    
</style>
</head>
<body>

<div class="container">
    <div class="header">
        MARKAS BESAR ANGKATAN UDARA<br>
    <u> DINAS INFORMASI DAN PENGOLAHAN DATA</u>
    </div>
    
    
    
    <div class="content">
    <center>
    <img src="{{public_path('admin/img/lambang.png')}}" width="90px" alt="">
    </center>
        <p align="center">SURAT PERINTAH<br>
        Nomor Surat Tugas {{$tugas->nomorsurat}}</p>
        {!! html_entity_decode($tugas->menimbang) !!}
        {!! html_entity_decode($tugas->dasar) !!}

        <p align="center">DIPERINTAHKAN</p>
        <p>Kepada:</p>
        <ol>
            <li>{{$tugas->personel}} NRP {{$tugas->nrp}}, jabatan Kapustasisinfo Disinfolahtaau (sebagai narasumber).</li>
        </ol>
        {!! html_entity_decode($tugas->perihal) !!}
        <p>Selesai.</p>
        <div class="signature">
        Dikeluarkan di Jakarta<br>
        pada tanggal &nbsp; &nbsp;  &nbsp; &nbsp;Januari 2016<br><br>
        <strong>{{$tugas->jabatan}},</strong><br><br><br><br><br>
        {{$tugas->pimpinan}}<br>
        {{$tugas->pangkat}}
    </div>
        <p>Tembusan:</p>
        <ol>
        @foreach($tembusan as $t)
            <li>{{$t->jabatan}}</li>
            @endforeach

            

        </ol>
    </div>

   
</div>

</body>
</html>