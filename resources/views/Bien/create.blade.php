@extends('Template')

@section('contenu')
<form action="{{route('bien.store')}}" method="POST">
    @csrf
<div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="helperText">Nom</label>
                            <input type="text" id="helperText" name="nom" class="form-control" placeholder="Nom">
                        </div>

                        <div class="form-group">
                            <label for="helperText">Type</label>
                            <input type="text" id="helperText" name="type" class="form-control" placeholder="Type de bien">
                        </div>

                        <div class="form-group">
                            <label for="helperText">Descrption</label>
                            <input type="text" id="helperText" name="description" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                            <label for="helperText">Image</label>
                            <input type="file" type="date" id="helperText" name="image" class="form-control">
                        </div>
                          <!-- <div class="form-group">
                            <label for="helperText">Catégorie</label>
                            <input type="text" id="helperText" name="categorie" class="form-control" placeholder="Catégorie">
                        </div> -->
                        <div class="form-group">
                            <label for="helperText">Prix</label>
                            <input type="text" id="helperText" name="prix" class="form-control" placeholder="Prix">
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