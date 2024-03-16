@extends('layout')
@section('title' , 'Details')
@section('content')
    <div class="card w-50 mx-auto mt-5">
        <div class="card-header"> <strong>titre :</strong> {{$filiere ->titre}}</div>
        <div class="card-body"> <strong>descreption :</strong> {{$filiere ->description	}}</div>
      </div>
    <a href="{{route('Filieres.index')}}" class="btn btn-primary w-50 d-block mx-auto mt-4">Retoure</a>
@endsection