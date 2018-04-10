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
      'umur' => 'required',
      'alamat' => 'required',
      'jenis_kelamin' => 'required'
    ]);

    //memasukkan data ke database
    // dd($request->all());
    $nama = $request->nama;
    $umur = $request->umur;
    $alamat = $request->alamat;
    $jenis_kelamin = $request->jenis_kelamin;

    Santri::create([
      'nama' => $nama,
      'umur' => $umur,
      'alamat' =>$alamat,
      'jenis_kelamin' =>$jenis_kelamin,
    ]);

    return redirect()->route('santri.create');
    // return view('santri.create');
    // return redirect()->url('santri/create');
  }
}
