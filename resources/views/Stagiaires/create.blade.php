@extends('layout')
@section('content')
<form class="bg-secondary p-4 mt-4 rounded-3 w-50 mx-auto" action="{{route('Stagiaires.store')}}" method="POST">
    @csrf
    <h3 class="text-center m-4 fst-italic">Ajouter Stagiaire</h3>
    <div class="mb-3 mt-3">
      <label for="nom" class="form-label">Nom Complet:</label>
      <input type="text" class="form-control" id="nom" placeholder="Enter name" name="nom_complet">
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="genre" value="M" checked>
        <label class="form-check-label mx-2" for="radio1">Homme</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="genre" value="F" checked>
        <label class="form-check-label mx-2" for="radio2">Femme</label>
    </div>
    <div class="mb-3 mt-3">
      <label for="dex" class="form-label">date_naissance:</label>
      <input type="date" class="form-control" id="dex" placeholder="Enter title" name="date_naissance">
    </div>
    <div class="mb-3 mt-3">
        <label for="nom" class="form-label">Note:</label>
        <input type="text" class="form-control" id="nom" placeholder="Enter name" name="note">
    </div>
    <div class="mb-3 mt-3">
        <label for="nom" class="form-label">Groupe:</label>
        <select name="groupe_id" id="" class="form-select">
            <option value="">choisie un grupe</option>
            @foreach ($groupes as $group)
                <option value={{$group->id}}>{{$group->titre}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection