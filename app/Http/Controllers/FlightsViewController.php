<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Flight;

class FlightsViewController extends Controller
{
    public function index(){
        $flights = Flight::all();
        return view('flight.index',['flights'=>$flights]);
    }

    public function show(Flight $flight)
    {
        return view('flight.show',['flight'=>$flight]);
    }

    public function edit(Flight $flight)
    {
        return view('flight.edit',['flight'=>$flight]);
    }

    public function create(Flight $flight)
    {
        return view('flight.create');
    }

    public function destroy(Flight $flight): RedirectResponse
    {
        $flight->delete();
        return back();
    }

    public function update(Flight $flight)
    {
        dd($flight);
    }
}