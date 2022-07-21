<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
<body>
    <fieldset>
        <legend>Pemesanan Anda</legend>
        @if ($makanan == null)
            <strong>{{$makanan}}</strong>
    @elseif($makanan == 'mie goreng')
        makanam : <strong>{{$makanan}}</strong> <br>
        harga : Rp.5000
    @elseif($makanan == 'seblak')
        makanam : <strong>{{$makanan}}</strong> <br>
        harga : Rp.75000
    @elseif($makanan == 'nasi padang')
        makanam : <strong>{{$makanan}}</strong> <br>
        harga : Rp.15000
    @else 
        makanam : <strong>{{$makanan}}</strong> <br>
    @endif

    @if ($minuman == null)
            <strong>{{$minuman}}</strong>
    @elseif($minuman == 'teh')
        minuman : <strong>{{$minuman}}</strong> <br>
        harga : Rp.5000
    @elseif($minuman == 'kopi')
        minuman : <strong>{{$minuman}}</strong> <br>
        harga : Rp.7500
    @elseif($minuman == 'jus')
        minuman : <strong>{{$minuman}}</strong> <br>
        harga : Rp.10000
    @else 
        minuman : <strong>{{$minuman}}</strong> <br>
    @endif

    @if ($porsi == null)
            <strong>{{$porsi}}</strong>
    @elseif($porsi == 'kecil')
        porsi : <strong>{{$porsi}}</strong> <br>
        harga : Rp.2500
    @elseif($porsi == 'sedang')
        porsi : <strong>{{$porsi}}</strong> <br>
        harga : Rp.7500
    @elseif($porsi == 'besar')
        porsi : <strong>{{$porsi}}</strong> <br>
        harga : Rp.10000
    @else 
        porsi : <strong>{{$porsi}}</strong> <br>
    @endifs
</body>
</html>