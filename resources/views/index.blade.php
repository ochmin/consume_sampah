{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Sampah</title>
</head>
<body>
    <table class="table">
    <thead>
      <tr>
        <th scope="row">No</th>
        <th scope="col">Kepala Keluarga</th>
        <th scope="col">No Rumah</th>
        <th scope="col">RT</th>
        <th scope="col">RW</th>
        <th scope="col">Jumlah Kantong Sampah</th>
        <th scope="col">Tanggal Pengangkutan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>ijat</td>
        <td>22</td>
        <td>05</td>
        <td>01</td>
        <td>3</td>
        <td>2023-06-09</td>
      </tr>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html> --}}








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA SAMPAH</title>
</head>
<body>
    <form action="" method="get">
        @csrf
        <input type="text" name="search" placeholder="Cari Data ...">
        <button type="submit">Cari</button>
    </form>
    <br>
    <a href="{{route('add')}}" style="background-color:tan;color:black">Tambah Data Baru</a>
    <a href="{{route('trash')}}" style="background-color:thistle;color:black;">Lihat data terhapus</a>
    @if (Session::get('success'))
    <p style="padding: 5px 10px; background: green; color: white; margin: 10px;">{{Session::get('success')}}</p>
    @endif
    @foreach ($sampahs as $sampahs)
        <ol>
            <li>KEPALA_KELUARGA : {{ $sampahs['kepala_keluarga'] }}</li>
            <li>NO_RUMAH : {{ $sampahs['no_rumah'] }}</li>
            <li>RT_RW : {{ $sampahs['rt_rw'] }}</li>
            <li>TOTAL_KARUNG_SAMPAH : {{ $sampahs['total_karung_sampah'] }}</li>
            <li>TANGGAL_PENGANGKUTAN : <a href="{{route('edit', $sampahs['id'])}}">Edit</a> || Hapus</li>
            <form action="{{route('delete', $sampahs['id'])}}"
                method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </ol>
    @endforeach
    </body>
</html>