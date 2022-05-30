<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = mahasiswa::all();
        return view('mahasiswa', compact('data_mahasiswa'));
    }

    public function insertData(Request $request)
    {
        // dd($request->all());
        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'data berhasil ditambahkan');;
    }

    public function tampilData($id)
    {
        $data_mahasiswa = mahasiswa::find($id);
        // dd($data);
        return view('tampilData', compact('data_mahasiswa'));
    }
    public function updateData(Request $request, $id)
    {
        $data_mahasiswa = mahasiswa::find($id);
        $data_mahasiswa->update($request->all());
        return redirect()->route('mahasiswa')->with('success', 'data berhasil update');
    }

    public function deleteData($id)
    {
        $data_mahasiswa = mahasiswa::find($id);
        $data_mahasiswa->delete();
        return redirect()->route('mahasiswa')->with('success', 'data berhasil dihapus');
    }
}
