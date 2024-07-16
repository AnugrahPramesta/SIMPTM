<?php

namespace App\Http\Controllers;

use App\Charts\DMChart;
use App\Charts\LandingPageChart;
use App\Models\Diabetes;
use App\Models\Gif;
use App\Models\Hipertensi;
use App\Models\KankerServik;
use App\Models\Kecamatan;
use App\Models\Posbindu;
use App\Models\UsiaProduktif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $pmanggar = Posbindu::where('kecamatan_id', 1)->get();
        $pdamar = Posbindu::where('kecamatan_id', 2)->get();
        $pkampit = Posbindu::where('kecamatan_id', 3)->get();
        $pgantung = Posbindu::where('kecamatan_id', 4)->get();
        $prenggiang = Posbindu::where('kecamatan_id', 5)->get();
        $pdendang = Posbindu::where('kecamatan_id', 6)->get();
        $ppesak = Posbindu::where('kecamatan_id', 7)->get();

        $dm = Diabetes::get();
        $gif = Gif::get();
        $hipertensi = Hipertensi::get();
        $serviks = KankerServik::get();
        $usiaproduktif = UsiaProduktif::get();

        // dd($dm);

        return view('index', [
            'pmanggars' => $pmanggar,
            'pdamars' => $pdamar,
            'pkampits' => $pkampit,
            'pgantungs' => $pgantung,
            'prenggiangs' => $prenggiang,
            'pdendangs' => $pdendang,
            'ppesaks' => $ppesak,
            'diabets' => $dm,
            'gifs' => $gif,
            'hipertensis' => $hipertensi,
            'serviks' => $serviks,
            'UPs' => $usiaproduktif,
        ]);
    }
}
