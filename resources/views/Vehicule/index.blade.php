@extends('Template')

@section('contenu')
<table class="table">
  <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>TYPE</th>
        <th>MODELE</th>
        <th>ANNEE</th>
        <th>PROPRIETAIRE</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($vehicule as $vehicule)
      <tr>
        <td>{{$vehicule->id}}</td>
        <td>{{$vehicule->nom}}</td>
        <td>{{$vehicule->type}}</td>
        <td>{{$vehicule->modele}}</td>
        <td>{{$vehicule->age}}</td>
        <td>{{$vehicule->nombre}}</td>
        <td><a href="{{route('vehicule.edit',['vehicule'=>$vehicule])}}" class="btn btn-success ">Modifier</a></td>
        <td><a href="" class="btn btn-danger ">Effacer</a></td>
      </tr>
      @endforeach
    </tbody>
@endsection('contenu')