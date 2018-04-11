<?php

namespace App\Http\Controllers;
use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
  //menampilkan data
  public function index()
  {
    $santris = Santri::all();

    return view('santri.index', compact('santris'));
  }

  //nampilin form
  public function create()
  {
    return view('santri.create');
  }

  //menyimpan
  public function store(Request $request)
  {

    //validation
    $request->validate([
      'nama' => 'required',
      'umur' => 'required|integer',
      'alamat' => 'required',
      'jenis_kelamin' => 'required'
    ]);

    // dd($request->all());
    //cara satu memasukkan data ke database
    // $nama = $request->nama;
    // $umur = $request->umur;
    // $alamat = $request->alamat;
    // $jenis_kelamin = $request->jenis_kelamin;
    //
    // Santri::create([
    //   'nama' => $nama,
    //   'umur' => $umur,
    //   'alamat' =>$alamat,
    //   'jenis_kelamin' =>$jenis_kelamin,
    // ]);

    //cara dua memasukkan data ke database
    // $data['nama'] = $request->nama;
    // $data['umur'] = $request->umur;
    // $data['alamat'] = $request->alamat;
    // $data['jenis_kelamin'] = $request->jenis_kelamin;
    //
    // Santri::create($data);

    Santri::create($request->all());

    return redirect()->route('santri.index');
    // return view('santri.create');
    // return redirect()->url('santri/create');
  }
}
