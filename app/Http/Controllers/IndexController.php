<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function Calendar(){

        $test = DB::table('leerling')->get();
        var_dump($test);
 
        return view('welcome', ['test' => $test]);
    }
}
