<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function Calendar(){

        //DATAABASE
        $lesuren = DB::table('lesuren')->get();
        $recenties = DB::table('recenties')->get();
        
        // TIME
        $VandaagDatum = Carbon::now()->format('d-m-Y');
        $Nu = Carbon::now();
        $WeekNummer = $Nu->weekOfYear;
        //->dd()

        $maandag = DB::table('lesuren')->select('*')->where('dag', '=', 1)->get();
        $dinsdag = DB::table('lesuren')->select('*')->where('dag', '=', 2)->get();
        $woensdag = DB::table('lesuren')->select('*')->where('dag', '=', 3)->get();
        $donderdag = DB::table('lesuren')->select('*')->where('dag', '=', 4)->get();
        $vrijdag = DB::table('lesuren')->select('*')->where('dag', '=', 5)->get();
        $zaterdag = DB::table('lesuren')->select('*')->where('dag', '=', 6)->get();
        $zondag = DB::table('lesuren')->select('*')->where('dag', '=', 7)->get();

        dump($maandag,$dinsdag, $woensdag, $donderdag, $vrijdag, $zaterdag, $zondag);

        //SELECT * From les WHERE Week(CURRENT_DATE) = Week(datum);

        return view('welcome', ['maandag' => $maandag, 'dinsdag' => $dinsdag, 'woensdag' => $woensdag, 'donderdag' => $donderdag, 'vrijdag' => $vrijdag, 'zaterdag' => $zaterdag, 'zondag' => $zondag]);
    }

}
