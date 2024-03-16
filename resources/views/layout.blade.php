<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('styling.css')}}">
    <title>@yield('title')</title>
</head>
<body> 
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end p-3">
      <div class="container">
        <a class="navbar-brand" href="#">Gestion Ista</a>
      </div>
      <div class="mx-5 fs-5 text-white">
        <a class="nav-link fst-italic w-25" href="{{route('Filieres.index')}}">Filiere</a>
      </div>
      <div class="mx-5 fs-5 text-white">
        <a class="nav-link fst- w-25" href="{{route('Groupes.index')}}">Groupes</a>
      </div>
      <div class="mx-5 fs-5 text-white">
        <a class="nav-link fst-italic w-25" href="{{route('Stagiaires.index')}}">Stagiaires</a>
      </div>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>