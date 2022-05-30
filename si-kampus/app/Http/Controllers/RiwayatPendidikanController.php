<?php

namespace App\Http\Controllers;

use App\Models\riwayatPendidikan;
use Illuminate\Http\Request;

class RiwayatPendidikanController extends Controller
{
    public function index()
    {
        $data_rp = riwayatPendidikan::all();
        return view('riwayatPendidikan', compact('data_rp'));
    }

    public function insertData(Request $request)
    {
        // dd($request->all());
        riwayatPendidikan::create($request->all());
        return redirect()->route('riwayatPendidikan')->with('success', 'data berhasil ditambahkan');;
    }

    public function tampilData($id)
    {
        $data_rp = riwayatPendidikan::find($id);
        // dd($data);
        return view('tampilData', compact('data_rp'));
    }
    public function updateData(Request $request, $id)
    {
        $data_rp = riwayatPendidikan::find($id);
        $data_rp->update($request->all());
        return redirect()->route('riwayatPendidikan')->with('success', 'data berhasil update');
    }

    public function deleteData($id)
    {
        $data_rp = riwayatPendidikan::find($id);
        $data_rp->delete();
        return redirect()->route('riwayatPendidikan')->with('success', 'data berhasil dihapus');
    }
}
