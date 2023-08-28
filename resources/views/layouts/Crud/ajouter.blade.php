
@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <strong>Ajouter une ouvrier</strong>
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{route('ouvrier.ajouter')}}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf

  <div class="form-group">
    <label for="nom">prenom</label>
    <input type="text" class="form-control" id="Nom" name="nom">
    </div>

    <div class="form-group">
    <label for="Prenom">nom</label>
    <input type="text" class="form-control" id="Prenom" name="prenom">
    </div>

    <div class="form-group">
    <label for="Prenom">adresse</label>
    <input type="text" class="form-control" id="Prenom" name="adresse">
    </div>
    <div class="form-group">
    <label for="Prenom">Telephone</label>
    <input type="text" class="form-control" id="Prenom" name="Telephone">
    </div>
    <div class="form-group">
    <label for="Classe">image</label>
    <input type="file" class="form-control" id="Classe" name="img">
    </div>
   <br>
  <button type="submit" class="btn btn-primary">AJOUTER</button>

    <a href="layouts.Crud.index" class="btn btn-danger">Revenir à la liste des étudiants</a>

</form>

@endsection
