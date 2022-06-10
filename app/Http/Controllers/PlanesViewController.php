<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function destroy(Plane $plane)
    {
        $plane->delete();
        return view('plane.index');
    }

    public function update(Plane $plane)
    {
        dd($plane);
    }
}