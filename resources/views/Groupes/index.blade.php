@extends('layout')
@section('title' , 'Groupes')
@section('content')

<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center">
      <h2 class=" fst-italic m-4">List of index groupes</h2>
      <div class="w-25">
        <a class="btn btn-success w-100 " href="{{route('Groupes.create')}}">Ajouter Groupe</a>
      </div>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-active">
          <tr>
            <th>Titre</th>
            <th>Descreption</th>
            <th>Filiere</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($groupes as $group)
              <tr>
                <td>{{$group->titre}}</td>
                <td>{{substr($group->description , 0 , 50)}}...</td>
                <td>
                    @foreach ($filieres as $filere)
                        @if($group->filieres_id == $filere->id) {{$filere->titre}} @endif             
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-success" href="{{route('Groupes.edit' , $group->id)}}">Edit</a>
                    <form class="d-inline" action="{{ route('Groupes.destroy', $group->id)}}" method='POST'>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">
                            Delete
                        </button>
                    </form>                    
                    <a class="btn btn-primary" href="{{route('Groupes.show' ,$group->id )}}">consulter</a>
                </td>                
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection