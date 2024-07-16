<?php

namespace App\Http\Controllers;

use App\Charts\DashboardChart;
use App\Charts\DMChart;
use App\Models\Diabetes;
use App\Models\Kecamatan;
use App\Models\Posbindu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $diabets = DB::table('diabetes')->sum('jumlah');
        $gif = DB::table('gifs')->sum('jumlah');
        $hipertensi = DB::table('hipertensis')->sum('jumlah');
        $serviks = DB::table('kanker_serviks')->sum('jumlah');

        // dd($kec);
        $chart = new DashboardChart;
        $chart->labels(['Diabetes Melitus', 'Gangguan Indra Fungsional', 'Hipertensi', 'Kanker Serviks']);
        $dataset = $chart->dataset('Dataset', 'pie', [$diabets, $gif, $hipertensi, $serviks]);
        // dd($chart);
        $dataset->backgroundColor([
            'rgba(255, 99, 132, 0.5)',
            'rgba(255, 159, 64, 0.5)',
            'rgba(255, 205, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(201, 203, 207, 0.5)'
        ]);

        return view('dashboard.dashboard', [
            'chart' => $chart,
            'title' => '',
        ]);
    }
}
