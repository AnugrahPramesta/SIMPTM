<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Posbindu;
use Illuminate\Http\Request;

class PosbinduController extends Controller
{
    public function index()
    {
        $data = Posbindu::all();
        $kecamatan = Kecamatan::all();
        return view('dashboard.posbindu', [
            'datas' => $data,
            'kecamatans' => $kecamatan,
            'title' => 'Data Posbindu',
        ]);
    }

    public function tambahData(Request $request)
    {
        $validation = $request->validate([
            'kecamatan_id' => 'required',
            'nama_posbindu' => 'required',
            'alamat' => 'required',
            'jadwal' => 'required|date',
        ]);
        if ($validation) {
            Posbindu::create($validation);
            return back()->with('succesTambah', 'Data berhasil ditambah');
        }
        return back()->with('failTambah', 'Data gagal ditambah');

        return redirect()->back();
    }

    public function editData(Request $request, $id)
    {
        $validation = $request->validate([
            'kecamatan_id' => 'required',
            'nama_posbindu' => 'required',
            'alamat' => 'required',
            'jadwal' => 'required|date',
        ]);

        if ($validation) {
            Posbindu::where('id', $id)->update($validation);
            return back()->with('successEdit', 'Data berhasil diubah');
        }
        return back()->with('failEdit', 'Data gagal diubah');
    }

    public function hapusData($id)
    {
        $data = Posbindu::find($id);

        if ($data) {
            $data->delete();
            return back()->with('deleteSuccess', 'Data berhasil dihapus');
        }
        return back()->with('deletefail', 'Data gagal dihapus');
    }
}
