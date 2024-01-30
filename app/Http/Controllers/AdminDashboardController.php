<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index(){

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

        $revieuws = DB::table('recenties')->select('*')->get();

      
        //SELECT * From les WHERE Week(CURRENT_DATE) = Week(datum);

        return view('dashboard', ['maandag' => $maandag, 'dinsdag' => $dinsdag, 'woensdag' => $woensdag, 'donderdag' => $donderdag, 'vrijdag' => $vrijdag, 'zaterdag' => $zaterdag, 'zondag' => $zondag, 'revieuw' => $revieuws]);
    }

    public function StatusVeranderen(Request $request){
       
        $Antwoord = $request->input('Sub');
        $Antwoord2 = $request->input('Id');
            
        if ($Antwoord == 'Geen'){
            $Antwoord = 0;
        } else if($Antwoord == 'Vrij'){
            $Antwoord = 1;
        }else if($Antwoord == 'Genomen'){
            $Antwoord = 2;
        };

        $affected = DB::table('lesuren')->where('id', $Antwoord2)->update(['Status' => $Antwoord]);
        return back();
    }
    public function GoedKeuren(Request $request){
       
        $Antwoord = $request->input('Sub');
        $Antwoord2 = $request->input('Id');
        if ($Antwoord == 'Fout'){
            $Antwoord = 0;
        } else if($Antwoord == 'Goed'){
            $Antwoord = 1;
        }else{
            $Antwoord = 0;
        };

        $affected = DB::table('recenties')->where('id', $Antwoord2)->update(['Goedkeuring' => $Antwoord]);
        return back();
    }
}