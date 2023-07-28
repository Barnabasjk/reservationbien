@extends('Template')

@section('contenu')
<div>
<table class="table">
  <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>SEXE</th>
        <th>AGE</th>
        <th>NOMBRE D'ENFANT</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($utilisateur as $utilisateur)
      <tr>
        <td>{{$utilisateur->id}}</td>
        <td>{{$utilisateur->nom}}</td>
        <td>{{$utilisateur->prenom}}</td>
        <td>{{$utilisateur->sexe}}</td>
        <td>{{$utilisateur->age}}</td>
        <td>{{$utilisateur->nbr}}</td>
        <td><a href="{{route('utilisateur.edit',['utilisateur'=>$utilisateur])}}" class="btn btn-success ">Modifier</a></td>
        <td><a href=""class="btn btn-danger ">Effacer</a></td>
      </tr>
      @endforeach
    </tbody>
    </div>
@endsection('contenu')