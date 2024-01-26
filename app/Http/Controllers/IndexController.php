<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Dupliceren;
use App\Mail\Inschrijven;
use Illuminate\View\View;
use Carbon\Carbon;

class IndexController extends Controller
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

        $revieuws = DB::table('recenties')->select('*')->where('Goedkeuring', '=', 0)->get();

      
        //SELECT * From les WHERE Week(CURRENT_DATE) = Week(datum);

        return view('welcome', ['maandag' => $maandag, 'dinsdag' => $dinsdag, 'woensdag' => $woensdag, 'donderdag' => $donderdag, 'vrijdag' => $vrijdag, 'zaterdag' => $zaterdag, 'zondag' => $zondag, 'revieuw' => $revieuws]);
    }

    public function RevieuwForm(Request $request){
       
        $name = $request->input('Name');
        $text = $request->input('Quote');
        $clearance = 0;
        

        $insert = DB::table('recenties')->insert(['Naam' => $name, 'Text' => $text, 'GoedKeuring' => 0 ]);

        if($insert) echo "<p>SUCCESS</p>";
        else echo "<p>FAILED</p>";
    }

    public function sendMail(Request $request){

        $name = $request->input('Name');
        $mail = $request->input('Email');
        $text = $request->input('Text');

      //  dd($request, $name, $mail, $text, );

        Mail::to($mail)->send(new Dupliceren($name, $mail, $text));
        Mail::to('Vincent@mail.nl')->send(new Inschrijven($name, $mail, $text));

        return back();
    }


}
