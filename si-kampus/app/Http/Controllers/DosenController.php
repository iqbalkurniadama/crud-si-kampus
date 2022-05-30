<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = dosen::all();
        return view('dosen', compact('data'));
    }

    public function insertData(Request $request)
    {
        // dd($request->all());
        dosen::create($request->all());
        return redirect()->route('dosen')->with('success', 'data berhasil ditambahkan');;
    }

    public function tampilData($id)
    {
        $data = dosen::find($id);
        // dd($data);
        return view('tampilData', compact('data'));
    }

    public function updateData(Request $request, $id)
    {
        $data = dosen::find($id);
        $data->update($request->all());
        return redirect()->route('dosen')->with('success', 'data berhasil update');
    }

    public function deleteData($id)
    {
        $data = dosen::find($id);
        $data->delete();
        return redirect()->route('dosen')->with('success', 'data berhasil dihapus');
    }
}
