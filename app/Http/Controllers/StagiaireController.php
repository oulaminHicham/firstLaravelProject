<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all()->sortByDesc('nom_complet');
        return view('Stagiaires.index' , ['stagiaires'=>$stagiaires]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes = Groupe::all();
        return view('Stagiaires.create' , ['groupes'=>$groupes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stagiaire::create([
            'nom_complet'=>$request->nom_complet ,
            'genre'=>$request->genre ,
            'date_naissance'=>$request->date_naissance ,
            'note'=>$request->note ,
            'groupe_id'=>$request->groupe_id
        ]);
        return to_route('Stagiaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $groupes = Groupe::all();
        $stagiaire = Stagiaire::find($id);
        return view('Stagiaires.edit' , ['groupes'=>$groupes , 'stagiaire'=>$stagiaire]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stagiaire = Stagiaire::find($id);
        $stagiaire->update($request->all());
        return to_route("Stagiaires.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stagiaire = Stagiaire::find($id);
        $stagiaire->delete();
        return to_route("Stagiaires.index");
    }
}
