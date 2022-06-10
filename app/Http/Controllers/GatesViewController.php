<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use App\Models\Gate;

class GatesViewController extends Controller
{
    public function index(){
        $gates = Gate::all();
        return view('gate.index',['gates'=>$gates]);
    }

    public function show(Gate $gate)
    {
        return view('gate.show',['gate'=>$gate]);
    }

    public function edit(Gate $gate)
    {
        return view('gate.edit',['gate'=>$gate]);
    }

    public function create(Gate $gate)
    {
        return view('gate.create');
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            Gate::query()->create([
                'size_small' => $request->input('size_small') === 'on',
                'state_free' => $request->input('state_free') === 'on',
                'international' => $request->input('international') === 'on',
                'number' => $request->input('number'),
            ]);
        } catch (\Exception $exeption) {
            Log::error('Failed '+ $exeption, ['exeption' => $exeption->getMessage()]);

            // TODO show Error in View

            return back();
        }
        return redirect(route('gates.index'));
    }

    public function destroy(Gate $gate): RedirectResponse
    {
        $gate->delete();
        return back();
    }

    public function update(Gate $gate)
    {
        dd($gate);
    }
}