@extends('Template')

@section('contenu')
<div>
<table class="table">
  <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>TYPE</th>
        <th>DESCRIPTION</th>
        
        <th>PRIX</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bien as $bien)
      <tr>
        <td>{{$bien->id}}</td>
        <td>{{$bien->nom}}</td>
        <td>{{$bien->type}}</td>
        <td>{{$bien->description}}</td>
        <td>{{$bien->prix}}</td>
        <td><a href="{{route('bien.edit',['bien'=>$bien])}}" class="btn btn-success ">Modifier</a></td>
        <td><a href=""class="btn btn-danger ">Effacer</a></td>
      </tr>
      @endforeach
    </tbody>
    </div>
@endsection('contenu')