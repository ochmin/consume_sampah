<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume Sampah || edit</title>
</head>
<body>
    <h2> Tambah data sampah baru</h2>
    @if (Session::get('errors'))
    <p style="color:red">{{Session::get('errors')}}</p>
    @endif
    <form action="{{route('update', $sampahs['id'])}}" method="POST">
    @csrf
    @method('PATCH')
    <div style="display:flex">
    <label for="kepala_keluarga">kepala_keluarga :</label>
     <input type="text" name="kepala_keluarga" id="kepala_keluarga" placeholder="Kepala Keluarga....">
</div>
<div style="display:flex">
    <label for="no_rumah">no_rumah</label>
     <input type="number" name="no_rumah" id="no_rumah" placeholder="No Rumah....">
</div>
<div style="display:flex">
    <label for="rt_rw">rt_rw</label>
     <input type="number" name="rt_rw" id="rt_rw" placeholder="Rt/Rw....">
</div>
    
    <div style="display: flex; margin-button: 15px">
        <label for="total_karung_sampah">total_karung_sampah</label>
        <input type="number" name="total_karung_sampah" id="total_karung_sampah" placeholder="contoh:  3">
    </div>
    <div style="display: flex; margin-button: 15px">
        <label for="tanggal_pengangkutan">tanggal_pengangkutan</label>
        <input type="text" name="tanggal_pengangkutan" id="tanggal_pengangkutan" placeholder="contoh:  2023-06-09">
    </div>
    <button type="submit">kirim</button>
</form>
</body>
</html>