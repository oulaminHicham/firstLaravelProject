@extends('layout')
@section('title' , 'details')
@section('content')
    <div class="card w-50 mx-auto mt-5">
        <div class="card-header"> <strong>titre :</strong> {{$groupe ->titre}}</div>
        <div class="card-body"> <strong>descreption :</strong> {{$groupe ->description	}}</div>
        <div class="card-body"> <strong>Filiere :</strong>    
            @foreach ($filieres as $filere)
                @if($groupe->filieres_id == $filere->id) {{$filere->titre}} @endif             
            @endforeach</div>
      </div>
    <a href="{{route('Groupes.index')}}" class="btn btn-primary w-50 d-block mx-auto mt-4">Retoure</a>
@endsection