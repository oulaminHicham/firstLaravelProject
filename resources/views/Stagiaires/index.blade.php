@extends('layout')
@section('title' , 'Stagiaires')
@section('content')
<div class="container">
        <div class="row bg-dark p-4 mt-4 rounded-2">
            <div class="d-flex justify-content-between">
                <h3 class="fst-italic text-white mx-4">List des Stagaires</h3>
                <a href="{{route("Stagiaires.create")}}" class="btn btn-primary w-25 d-block mx-4">Ajouter Stagiaire</a>
            </div>
       @foreach ($stagiaires as $stagiaire)
       <div class="col-sm-12 col-md-6 col-ls-4 ">
            <div class="card m-3">
                <div class="card-header"><strong>Nom :</strong>{{$stagiaire->nom_complet}}</div>
                <div class="card-body"><strong>Genre : </strong>{{$stagiaire->genre == 'M'?'Homme':'Femme'}}</div>
                <div class="card-footer"><strong>Date Naissance : </strong>{{$stagiaire->date_naissance}}</div>
                <div class="card-footer"><strong>Note: </strong>{{$stagiaire->note}}</div>
                <div class="card-footer"><strong>Groupe : </strong>{{$stagiaire->groupe->titre}}</div>
                <div class="card-footer">
                    <a href="{{route("Stagiaires.edit" ,$stagiaire->id )}}" class="btn btn-success">Modifie</a>
                    <form class="d-inline" action="{{route('Stagiaires.destroy' ,$stagiaire->id)}}" method="POST">
                        @csrf
                        @method("delete")
                        <input type="submit" value="suprimer" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
@endsection