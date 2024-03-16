@extends('layout')
@section('content')
    <h3 class="text-center fst-italic m-4">Modifier Filieres</h3>
    <form class="w-75 mx-auto" action="{{route('Filieres.update' ,$filiere->id )}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3 mt-3">
          <label for="title" class="form-label">Title:</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="titre" value="{{$filiere->titre}}">
        </div>
      
        <div class="mb-3 mt-3">
          <label for="dex" class="form-label">Descreption:</label>
          <input type="text" class="form-control" id="dex" placeholder="Enter title" name="description" value="{{$filiere->description}}">
        </div>
      
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection