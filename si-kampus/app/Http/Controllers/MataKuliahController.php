<?php

namespace App\Http\Controllers;

use App\Models\mataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data_matkul = mataKuliah::all();
        return view('mataKuliah', compact('data_matkul'));
    }

    public function insertData(Request $request)
    {
        // dd($request->all());
        mataKuliah::create($request->all());
        return redirect()->route('mataKuliah')->with('success', 'data berhasil ditambahkan');;
    }

    public function tampilData($id)
    {
        $data_matkul = mataKuliah::find($id);
        // dd($data);
        return view('tampilData', compact('data_matkul'));
    }
    public function updateData(Request $request, $id)
    {
        $data_matkul = mataKuliah::find($id);
        $data_matkul->update($request->all());
        return redirect()->route('mataKuliah')->with('success', 'data berhasil update');
    }

    public function deleteData($id)
    {
        $data_matkul = mataKuliah::find($id);
        $data_matkul->delete();
        return redirect()->route('mataKuliah')->with('success', 'data berhasil dihapus');
    }
}
