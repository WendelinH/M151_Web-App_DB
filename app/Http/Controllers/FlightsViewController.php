<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
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

    public function store(Request $request): RedirectResponse
    {
        try {
            Flight::query()->create([
                'start_time' => $request->input('start_time'),
                'landing_time' => $request->input('landing_time'),
                'number' => $request->input('number'),
            ]);
        } catch (\Exception $exeption) {
            Log::error('Failed '+ $exeption, ['exeption' => $exeption->getMessage()]);

            // TODO show Error in View

            return back();
        }
        return redirect(route('flights.index'));
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