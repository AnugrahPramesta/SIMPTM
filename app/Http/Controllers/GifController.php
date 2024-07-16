<?php

namespace App\Http\Controllers;

use App\Charts\GifChart;
use App\Models\Gif;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class GifController extends Controller
{
    public function index()
    {
        $data = Gif::all();
        $kecamatan = Kecamatan::all();

        $manggar =  Gif::where('kecamatan_id', 1)->pluck('jumlah')->all();
        $damar =  Gif::where('kecamatan_id', 2)->pluck('jumlah')->all();
        $kampit =  Gif::where('kecamatan_id', 3)->pluck('jumlah')->all();
        $gantung =  Gif::where('kecamatan_id', 4)->pluck('jumlah')->all();
        $renggiang =  Gif::where('kecamatan_id', 5)->pluck('jumlah')->all();
        $dendang =  Gif::where('kecamatan_id', 6)->pluck('jumlah')->all();
        $pesak =  Gif::where('kecamatan_id', 7)->pluck('jumlah')->all();

        $chart = new GifChart;
        $chart->labels(['Manggar', 'Damar', 'Kelapa Kampit', 'Gantung', 'Renggiang', 'Dendang', 'Simpang Pesak']);
        $dataset = $chart->dataset('Data Gangguan Indra Fungsional', 'bar', [
            $manggar[0], $damar[0], $kampit[0], $gantung[0], $renggiang[0], $dendang[0], $pesak[0],
        ]);
        $dataset->backgroundColor([
            'rgba(255, 99, 132, 0.5)',
            'rgba(255, 159, 64, 0.5)',
            'rgba(255, 205, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(201, 203, 207, 0.5)'
        ]);
        return view('dashboard.gif', [
            'datas' => $data,
            'kecamatans' => $kecamatan,
            'chart' => $chart,
            'title' => 'Data GIF',
        ]);
    }

    public function editData(Request $request, $id)
    {
        $validation = $request->validate([
            'kecamatan_id' => 'required',
            'laki' => 'required|numeric|min:0',
            'perempuan' => 'required|numeric|min:0',
            'jumlah' => 'required|numeric|min:0',
            'persentase' => 'required|numeric|min:0|max:100',
        ]);

        if ($validation) {
            Gif::where('id', $id)->update($validation);
            return back()->with('successEdit', 'Data berhasil diubah');
        }
        return back()->with('failEdit', 'Data gagal diubah');
    }
}
