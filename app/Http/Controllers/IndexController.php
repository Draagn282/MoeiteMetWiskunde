<?php

namespace App\Http\Controllers;
use App\Models\Lesuren;
use App\Models\Recenties;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Dupliceren;
use App\Mail\Inschrijven;
use Illuminate\View\View;


class IndexController extends Controller
{

    
    public function index()
    {
        // Fetch lesuren for each day of the week using Eloquent
        $days = [];
        for ($i = 1; $i <= 7; $i++) {
            $days[$i] = Lesuren::where('dag', $i)->get();
        }
    
        // Fetch recenties with approval status using Eloquent
        $reviews = Recenties::where('Goedkeuring', 1)->get();
    
        // Current date
        $today = Carbon::now()->format('d-m-Y');
    
        // Week number
        $weekNumber = Carbon::now()->weekOfYear;
    
        return view('welcome', compact('days', 'reviews', 'today', 'weekNumber'));
    }

    
    public function RevieuwForm(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Name' => 'required|string',
            'Quote' => 'required|string',
        ]);
    
        // Retrieve data from the request
        $name = $request->input('Name');
        $text = $request->input('Quote');
    
        // Create a new recentie instance
        $recentie = new Recenties();
        $recentie->Naam = $name;
        $recentie->Text = $text;
        $recentie->GoedKeuring = 0; // Assuming 0 indicates pending approval
    
        // Save the recentie
        $saved = $recentie->save();
    
        // Check if the recentie was successfully saved
        if ($saved) {
            return response()->json(['message' => 'SUCCESS'], 200);
        } else {
            return response()->json(['message' => 'FAILED'], 500);
        }
    }
    

    public function sendMail(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'Name' => 'required|string',
        'Email' => 'required|email',
        'Text' => 'required|string',
    ]);

    // Retrieve data from the request
    $name = $request->input('Name');
    $email = $request->input('Email');
    $text = $request->input('Text');

    try {
        // Send mail to the provided email address
        Mail::to($email)->send(new Dupliceren($name, $email, $text));
        
        // Send mail to the admin email address
        Mail::to('Vincent@mail.nl')->send(new Inschrijven($name, $email, $text));

        return back()->with('success', 'Email sent successfully.');
    } catch (\Exception $e) {
        // Handle any exceptions that occur during email sending
        return back()->with('error', 'Failed to send email.');
    }
}

}
