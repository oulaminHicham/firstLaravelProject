<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Groupe;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupes = Groupe::all()->sortByDesc('titre');
        $s = Stagiaire::all();
        $filieres = Filiere::all();
        return view('Groupes.index' , ['groupes'=>$groupes , 'filieres'=>$filieres , 's'=>$s]);
    }
    //
    public function create()
    {
        $filieres = Filiere::all();
        return view('Groupes.create' ,['filieres'=>$filieres]);
    }
    //
    public function store(Request $request)
    {

        Groupe::create([
            'titre'=>$request->titre ,
            'description'=>$request->description ,
            'filieres_id'=>$request->filieres_id ,
        ]);
        return to_route('Groupes.index');
    }
    //
    public function show(string $id)
    {
        $groupe = Groupe::find($id);
        $filieres = Filiere::all();
        return view('Groupes.show' ,['groupe'=>$groupe , 'filieres'=>$filieres]);
    }
    //
    public function edit(string $id)
    {
        $groupe = Groupe::find($id);
        $filieres = Filiere::all();
        return view('Groupes.edit' , ['groupe'=>$groupe , 'filieres'=>$filieres]);
    }
    //
    public function update(Request $request, string $id)
    {
        $groupe = Groupe::find($id);
        $groupe ->update($request->all());
        return to_route('Groupes.show' , $id);
    }
    //
    public function destroy(string $id)
    {
        $groupe = Groupe::find($id);
        $groupe ->delete();
        return to_route('Groupes.index');
    }
}
