@extends('layout')
@section('title' , 'Ajouter Groupe')
@section('content')
    <div class="container w-75 mx-auto mt-5">
        <h3 class="fst-italic my-4">Modifier Groupes</h3>
        <form action="{{route('Groupes.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" placeholder="Entrer Le Titre"  name="titre">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <select class="form-select" name="filieres_id">
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->id}}">{{$filiere->titre}}</option>
            @endforeach
            </select>
            <div class="mb-3">
                <input class="btn btn-success w-100 mt-4" type="submit" value="Ajouter">
            </div>
        </form>
    </div>
@endsection