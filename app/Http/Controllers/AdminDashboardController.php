<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index(){
        // Fetch data from the database using Eloquent models
        $lesuren = DB::table('lesuren')->get();
        $recenties = DB::table('recenties')->get();
        
        // Current date and time
        $VandaagDatum = Carbon::now()->format('d-m-Y');
        $Nu = Carbon::now();
        $WeekNummer = $Nu->weekOfYear;
    
        // Fetch lesuren for each day of the week
        $days = [];
        for ($i = 1; $i <= 7; $i++) {
            $days[$i] = DB::table('lesuren')->where('dag', $i)->get();
        }
    
        // Fetch reviews
        $reviews = DB::table('recenties')->select('*')->get();
    
        // Pass data to the view
        return view('dashboard', compact('lesuren', 'recenties', 'VandaagDatum', 'WeekNummer', 'days', 'reviews'));
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