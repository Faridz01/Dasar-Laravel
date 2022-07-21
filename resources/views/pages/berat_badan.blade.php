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
            <h3>Data Berat Badan</h3>
        </legend>
            @if($bmi2 <= 17.0)
            Berat Badan : {{$berat}} <br>
            Tinggi Badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong> <br>
            Status : Kurus, kurang berat badan

            @elseif($bmi2 <= 18.4)
            Berat Badan : {{$berat}} <br>
            Tinggi Badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong> <br>
            Status : Kurus, Badan Ringan

            @elseif($bmi2 <= 25.0)
            Berat Badan : {{$berat}} <br>
            Tinggi Badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong> <br>
            Status : Normal

            @elseif($bmi2 <= 27.0)
            Berat Badan : {{$berat}} <br>
            Tinggi Badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong> <br>
            Status : Gemuk, kelebihan berat badan

            @else
            Berat Badan : {{$berat}} <br>
            Tinggi Badan : {{$tinggi}} <br>
            Hasil BMI : <strong>{{$bmi2}}</strong> <br>
            Status : BERAT BADAN ANDA TIDAK ADA DI STATUS
            
            @endif
    </fieldset>
</body>
</html>