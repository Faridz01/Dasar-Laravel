<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Kampus
        </legend>
        @foreach ($kampus as $dosen)
        <h4>Dosen <br></h4>
        Nama Dosen : {{$dosen ['name'] }} <br>
        NIK : {{$dosen ['age'] }} <br>
           <h4>Mahasiswa <br></h4>
        Nama Siswa : {{$dosen ['siswa'] }} <br>
        NIK Siswa : {{$dosen ['nik'] }} <br>
        Jurusan : {{$dosen ['jurusan'] }} <br>

        Mata Kuliah :
        @foreach ($dosen['mata_kuliah'] as $mata_kuliah)
        <li>{{$mata_kuliah}}</li>      
        @endforeach
        <hr>
        @endforeach
    </fieldset>
</body>
</html>