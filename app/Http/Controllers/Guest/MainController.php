<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


// Models
use App\Models\Train;

use Carbon\Carbon;
class MainController extends Controller
{
    public function index()
    {
        $currentDateTime = Carbon::now()->format('Y-m-d');
        $train= Train::where('departure_date','=',$currentDateTime)->get();
        //dd(Train::all());
        return view('home',[
            'currentDateTime' => $currentDateTime,
            'trains' => $train
        ]);
        

    }
}
