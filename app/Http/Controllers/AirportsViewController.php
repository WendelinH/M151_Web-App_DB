<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;

class AirportsViewController extends Controller
{
    public function index(){
        $airports = Airport::all();
        return view('airports',['airports'=>$airports]);
    }
}