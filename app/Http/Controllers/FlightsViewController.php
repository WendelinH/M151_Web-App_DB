<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightsViewController extends Controller
{
    public function index(){
        $flights = Flight::all();
        return view('flights',['flights'=>$flights]);
    }
}