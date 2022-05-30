<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data_kelas = kelas::all();
        return view('kelas', compact('data_kelas'));
    }

    public function insertData(Request $request)
    {
        // dd($request->all());
        kelas::create($request->all());
        return redirect()->route('kelas')->with('success', 'data berhasil ditambahkan');;
    }

    public function tampilData($id)
    {
        $data_kelas = kelas::find($id);
        // dd($data);
        return view('tampilData', compact('data_kelas'));
    }
    public function updateData(Request $request, $id)
    {
        $data_kelas = kelas::find($id);
        $data_kelas->update($request->all());
        return redirect()->route('kelas')->with('success', 'data berhasil update');
    }

    public function deleteData($id)
    {
        $data_kelas = kelas::find($id);
        $data_kelas->delete();
        return redirect()->route('kelas')->with('success', 'data berhasil dihapus');
    }
}
