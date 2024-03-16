<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::all()->sortByDesc('titre');
        return view('Filieres.index' , ['filieres'=>$filieres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filiere = new Filiere();
        $filiere->create($request->all());
        return to_route('Filieres.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $filiere = Filiere::find($id);
        return view('Filieres.show' , ['filiere'=>$filiere]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $filiere = Filiere::find($id);
        return view('Filieres.edit' , ['filiere'=>$filiere]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filiere =Filiere::find($id);
        $filiere ->titre = $request ->titre ;
        $filiere ->description= $request->description;
        $filiere ->save();
        return to_route('Filieres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filiere=Filiere::find($id);
        $filiere->delete();
        return to_route('Filieres.index');
    }
}




