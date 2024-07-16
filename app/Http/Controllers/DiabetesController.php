<?php

namespace App\Http\Controllers;

use App\Charts\DMChart;
use App\Models\Diabetes;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class DiabetesController extends Controller
{
    public function index()
    {
        $data = Diabetes::all();
        $kecamatan = Kecamatan::all();

        $manggar =  Diabetes::where('kecamatan_id', 1)->pluck('jumlah')->all();
        $damar =  Diabetes::where('kecamatan_id', 2)->pluck('jumlah')->all();
        $kampit =  Diabetes::where('kecamatan_id', 3)->pluck('jumlah')->all();
        $gantung =  Diabetes::where('kecamatan_id', 4)->pluck('jumlah')->all();
        $renggiang =  Diabetes::where('kecamatan_id', 5)->pluck('jumlah')->all();
        $dendang =  Diabetes::where('kecamatan_id', 6)->pluck('jumlah')->all();
        $pesak =  Diabetes::where('kecamatan_id', 7)->pluck('jumlah')->all();
        // dd($manggar);

        $chart = new DMChart;
        $chart->labels(['Manggar', 'Damar', 'Kelapa Kampit', 'Gantung', 'Renggiang', 'Dendang', 'Simpang Pesak']);
        $dataset = $chart->dataset('Data Diabetes Melitus', 'bar', [
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

        return view('dashboard.diabetes', [
            'datas' => $data,
            'kecamatans' => $kecamatan,
            'chart' => $chart,
            'title' => 'Data Diabetes Melitus'
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
            Diabetes::where('id', $id)->update($validation);
            return back()->with('successEdit', 'Data berhasil diubah');
        }
        return back()->with('failEdit', 'Data gagal diubah');
    }
}
