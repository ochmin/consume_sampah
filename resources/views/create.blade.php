<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Data Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="d-flex justify-content-center align-items-center my-4">
    <div class="card my-2" style="border-radius:6% 2%">
       <div class="container">
            <form action="/add/send" method="post" style="width:500px;">
                @csrf
                    <legend class="text-center mt-3"><b>DATA SAMPAH</b></legend>
                    <div class="mb-3">
                        <label class="form-label">Kepala Keluarga</label>
                        <input type="text" name="Kepala Keluarga" id="" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No Rumah</label>
                        <input type="number" name="No Rumah" id="" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">RT</label>
                        <input type="number" name="RT" id="" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">RW</label>
                        <input type="number" name="RW" id="" class="form-control" placeholder="Disabled input">
                    </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Jumlah Kantong Sampah</label>
                        <input type="number" id="" name="Jumlah Kantong Sampah" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Pengangkutan</label>
                        <input type="text" id="" name="Tanggal Pengangkutan" class="form-control" placeholder="Disabled input">
                    </div>
                    
                    <a href="/" class="btn btn-secondary mb-3">Back</a>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
           </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume Sampah || create</title>
</head>
<body>
    <h2> Tambah data sampah baru</h2>
     <div style="background-color:darkorange">
    @if (Session::get('errors'))
    <p style="color:red">{{Session::get('errors')}}</p>
    @endif
    <form action="{{route('send')}}" method="POST">
    @csrf
    <div style="display:flex">
    <label for="Kepala Keluarga">Kepala Keluarga :</label>
     <input type="text" name="Kepala Keluarga" id="Kepala Keluarga" placeholder="Kepala Keluarga....">
</div>
<div style="display:flex">
    <label for="No Rumah">No Rumah</label>
     <input type="number" name="No Rumah" id="No Rumah" placeholder="No Rumah....">
</div>
<div style="display:flex">
    <label for="RT">RT</label>
     <input type="number" name="RT" id="RT" placeholder="RT....">
</div>
<div style="display:flex">
    <label for="RW">RW</label>
     <input type="number" name="RW" id="RW" placeholder="RW....">
</div>
    
    <div style="display: flex; margin-button: 15px">
        <label for="Total Karung Sampah">Total Karung Sampah</label>
        <input type="number" name="Total Karung Sampah" id="Total Karung Sampah" placeholder="Contoh : 3">
    </div>
    <div style="display: flex; margin-button: 15px">
        <label for="Tanggal Pengangkutan">Tanggal Pengangkutan</label>
        <input type="text" name="Tanggal Pengangkutan" id="Tanggal Pengangkutan" placeholder="Contoh : 2023-06-09">
    </div>
    <button type="submit">Kirim</button>
</form>
</body>
</html> --}}