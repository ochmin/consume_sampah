<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;
class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         $search = $request->search;
         $data = (new BaseApi)->index('/api/sampahs',['search_kepala_keluarga' => $search]);
         $sampahs = $data->json();
         return view ('index')->with(['sampahs' => $sampahs['data']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            't anggal_pengangkutan' => $request->tanggal_pengangkutan,
       ];

       $proses = (new BaseApi)->store('/api/sampahs/tambah-data', $data);
        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors ' => $errors]);
        }else {
            return redirect('/')->with('success', 'berhasil menambahkan data baru ');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $data = (new BaseApi)->edit('/api/sampahs/' .$id);
    if ($data->failed()) {
       $errors = $data->json(['data']);
       return redirect()->back()->with(['errors' => $errors]);
   }else {
       $sampahs = $data->json(['data']);
       return view('edit')->with(['sampahs' => $sampahs]);
   }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spayload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
       ];

       $proses = (new BaseApi)->update('/api/sampahs/update/' .$id, $spayload);
        if ($proses->failed()) {
            $errors = $proses->json(['data']);
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/')->with('success', 'berhasil mengubah data ');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proses = (new BaseApi)->delete('/api/sampahs/delete/' .$id);
        if ($proses->failed()) {
            $errors = $proses->json(['data']);
            return redirect()->back()->with(['errors' => $errors]);
    }else {
       
        return redirect('/')->with('success', 'berhasil hapus data sementara');
    }
    }
      
    public function trash()
    {
       $proses = (new BaseApi)->trash('/api/sampahs/show/trash');
       if ($proses->failed()) {
           $errors = $proses->json(['data']);
           return redirect()->back()->with(['errors' => $errors]);
   }else {
           $sampahsTrash = $proses->json('data');
           return view('trash')->with(['sampahsTrash' => $sampahsTrash]);
   }
    }

    public function permanent($id)
  {
    $proses = (new BaseApi)->trash('/api/sampahs/trash/delete/permanent/'.$id);
    if ($proses->failed()) {
        $errors = $proses->json(['data']);
        return redirect()->back()->with(['errors' => $errors]);
  }else {
    return redirect()->back()->with('success', 'berhasil menghapus data secara permanen');
  }
}

public function restore($id)
 {
    $proses = (new BaseApi)->trash('/api/sampahs/trash/restore/'.$id);
    if ($proses->failed()) {
        $errors = $proses->json(['data']);
        return redirect()->back()->with(['errors' => $errors]);
  }else {
    return redirect('/')->with('success', 'berhasil mengembalikan data dari sampah');
  }
}
}
