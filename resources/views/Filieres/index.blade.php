@extends('layout')
@section('title' , 'Filieres')
@section('content')

    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="fst-italic m-3 text-dark-50">List des filiere</h3>
            <a class="btn btn-success w-25" href="{{ route('Filieres.create') }}">Ajouter Filiere</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Descreption</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filieres as $filiere)
                    <tr>
                        <td>{{ $filiere->titre }}</td>
                        <td> {{ substr( $filiere->description, 0 , 60) }}...</td>
                        <td>
                            <a class="btn btn-info text-white" href="{{route('Filieres.show' ,$filiere->id )}}">consulter</a>
                            <a class="btn btn-success" href="{{route('Filieres.edit' , $filiere->id)}}">editer</a>
                            <form class="d-inline" action="{{ route('Filieres.destroy', $filiere->id) }}" method='post'>
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
