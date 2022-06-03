<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;

class PlanesViewController extends Controller
{
    public function index(){
        $planes = Plane::all();
        return view('planes',['planes'=>$planes]);
    }
}