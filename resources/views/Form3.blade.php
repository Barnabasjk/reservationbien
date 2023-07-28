@extends('Template')

@section('contenu')
<form action="" method="post">
    @csrf
<div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="helperText">Nom du Proprietaire</label>
                            <input type="text" id="helperText" name="nom" class="form-control" placeholder="Nom">
                        </div>

                        <div class="form-group">
                            <label for="helperText">Adresse</label>
                            <input type="text" id="helperText" name="prenom" class="form-control" placeholder="Prénom">
                        </div>

                        <div class="form-group">
                            <label for="helperText">Pays</label>
                            <input type="text" id="helperText" name="sexe" class="form-control" placeholder="Sexe">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="helperText">Numero de la maison</label>
                            <input type="text" id="helperText" name="age" class="form-control" placeholder="Age">
                        </div>
                          <div class="form-group">
                            <label for="helperText">Nombre de chambre</label>
                            <input type="text" id="helperText" name="nbr" class="form-control" placeholder="Nonbre d'enfant">
                        </div>
                        <div><br>
                        <button type="submit" class="btn btn-danger rounded-pill">Danger</button>
                        <button type="reset" class="btn btn-success rounded-pill">Success</button>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
</form>
@endsection('contenu')