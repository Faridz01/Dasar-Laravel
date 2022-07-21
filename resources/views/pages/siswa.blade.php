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
            Data Siawa
        </legend>
        @foreach ($siswa as $murid)
        Nama : {{$murid ['name'] }} <br>
        umur : {{$murid ['age'] }} <br>
        Status :

        @if ($murid['age'] > 17)
        ANDA SUDAH BISA MEILIKI SIM
        @else
        ANDA BELUM BISA MEILIKI SIM
        @endif 
        <br>
       
        hobi :
        @foreach ($murid['hobi'] as $hobi)
        <li>{{$hobi}}</li>
       
        @endforeach
        <hr>
        @endforeach
    </fieldset>
</body>
</html>