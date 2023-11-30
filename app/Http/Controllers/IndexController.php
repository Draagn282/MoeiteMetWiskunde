<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function Calendar(){

        $Leerling = DB::table('leerling')->get();
        $Lessen = DB::table('Les')->get();
        $Planning = DB::table('Planning')->get();
        // var_dump($Leerling);
        // var_dump($Planning);
        // var_dump($Lessen);
        return view('welcome', ['Leer' => $Leerling, 'Plan' => $Planning, 'Les' => $Lessen]);
    }

    public function Date(){
        $todayDate = Carbon::now()->format('Y-m-d');
        dd($todayDate);
    }
}
