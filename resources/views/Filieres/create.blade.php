@extends('layout')
@section('content')
    <h1 class="text-center">Cree Un Filiere</h1>
    <form class="w-75 mx-auto" action="{{route('Filieres.store')}}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
          <label for="title" class="form-label">Title:</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="titre">
        </div>
      
        <div class="mb-3 mt-3">
          <label for="dex" class="form-label">Descreption:</label>
          <input type="text" class="form-control" id="dex" placeholder="Enter title" name="description">
        </div>
      
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
@endsection