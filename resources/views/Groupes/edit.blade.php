@extends('layout')
@section('title' , 'Edit')
@section('content')
    <div class="container w-75 mx-auto mt-5">
        <h3 class="fst-italic my-4">Modifier Groupes</h3>
        <form class="edit-form p-3 rounded-3" action="{{route('Groupes.update' , $groupe->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" placeholder="Entrer Le Titre"  name="titre" value="{{$groupe->titre}}">
              </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{$groupe->description}}</textarea>
            </div>
            <select class="form-select" name="filieres_id">
               @foreach ($filieres as $filiere)
                <option {{$filiere->id == $groupe->filieres_id ? 'selected' : null }} value="{{$filiere->id}}">{{$filiere->titre}}</option>
               @endforeach
            </select>
            <input class="btn btn-success w-100 mt-4" type="submit" value="Modifier">
        </form>
    </div>
@endsection