<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>{{ $tugas->nomorsurat }}</p>
    <p>{{ $tugas->personel }}</p>
    <p>{{ $tugas->nrp }}</p>
    <p>{{ $tugas->mulai }}</p>
    <p>{{ $tugas->akhir }}</p>
    <p>Tembusan :</p>
    <ol>
        @foreach ($tembusan as $tem)
            <li>{{ $tem->jabatan }}</li>
        @endforeach
    </ol>
    
</body>
</html>