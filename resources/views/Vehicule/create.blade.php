@extends('Template')

@section('contenu')
<form action="{{route('vehicule.store')}}" method="post">
    @csrf
<div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="helperText">Nom de la voiture</label>
                            <input type="text" id="helperText" name="nom" class="form-control" placeholder="Nom de la voiture">
                        </div>

                        <div class="form-group">
                            <label for="helperText">Type</label>
                            <input type="text" id="helperText" name="type" class="form-control" placeholder="Type de voiture">
                        </div>

                        <div class="form-group">
                            <label for="helperText">Modèles</label>
                            <input type="text" id="helperText" name="modele" class="form-control" placeholder="Modèle">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="helperText">Année de fabrication</label>
                            <input type="text" id="helperText" name="age" class="form-control" placeholder="Année de fabrication">
                        </div>
                          <div class="form-group">
                            <label for="helperText">Nom du Propriétaire</label>
                            <input type="text" id="helperText" name="nombre" class="form-control" placeholder="Nom du proprietaire">
                        </div>
                        <div><br>
                        <button type="reset" class="btn btn-danger rounded-pill">Danger</button>
                        <button type="submit" class="btn btn-success rounded-pill">Success</button>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
</form>
@endsection('contenu')