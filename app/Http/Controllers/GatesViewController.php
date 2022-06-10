<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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