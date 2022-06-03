<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gate;

class GatesViewController extends Controller
{
    public function index(){
        $gates = Gate::all();
        return view('gates',['gates'=>$gates]);
    }
}