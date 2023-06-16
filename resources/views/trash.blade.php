<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume sampah || Trash</title>
</head>
<body>
    @if (Session::get('errors'))
    <p style="padding: 5px 10px; background: red; color:white; margin: 10px;">{{Session::get('errors')}}</p>
    @endif
    @if (Session::get('success'))
    <p style="padding: 5px 10px; background: green; color:white; margin: 10px;">{{Session::get('success')}}</p>
    @endif
    <a href="/">Kembali</a>
    <ol>
        @foreach ($sampahsTrash as $sampahs)
        <li>KEPALA_KELUARGA : {{ $sampahs['kepala_keluarga'] }}</li>
            <li>NO_RUMAH : {{ $sampahs['no_rumah'] }}</li>
            <li>RT_RW : {{ $sampahs['rt_rw'] }}</li>
            <li>TOTAL_KARUNG_SAMPAH : {{ $sampahs['total_karung_sampah'] }}</li>
            <li>TANGGAL_PENGANGKUTAN : {{ $sampahs['tanggal_pengangkutan'] }}</li>
            <a href="{{route('restore', $sampahs['id'])}}">Kembalikan Data</a>
            <a href="{{route('permanent', $sampahs['id'])}}" style="background-color: orange; color:white">Hapus permanent</a>
        </li>
        @endforeach
</body>
</html>