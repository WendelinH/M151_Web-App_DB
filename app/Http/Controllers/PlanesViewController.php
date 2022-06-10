<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use App\Models\Plane;

class PlanesViewController extends Controller
{
    public function index(){
        $planes = Plane::all();
        return view('plane.index',['planes'=>$planes]);
    }

    public function show(Plane $plane)
    {
        return view('plane.show',['plane'=>$plane]);
    }

    public function edit(Plane $plane)
    {
        return view('plane.edit',['plane'=>$plane]);
    }

    public function create(Plane $plane)
    {
        return view('plane.create');
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            Plane::query()->create([
                'pasengers' => $request->input('pasengers'),
                'refuel_time' => $request->input('refuel_time'),
                'jet' => $request->input('jet') === 'on',
                'propeller' => $request->input('propeller') === 'on',
            ]);
        } catch (\Exception $exeption) {
            Log::error('Failed '+ $exeption, ['exeption' => $exeption->getMessage()]);

            // TODO show Error in View

            return back();
        }
        return redirect(route('planes.index'));
    }

    public function destroy(Plane $plane): RedirectResponse
    {
        $plane->delete();
        return back();
    }

    public function update(Plane $plane)
    {
        dd($plane);
    }
}