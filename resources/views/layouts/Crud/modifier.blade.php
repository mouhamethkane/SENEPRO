<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
  <div class="row">

    <div class="col s12">
    <h1>MODIFIER UN OUVRIER </h1>
    <hr>
    
    @if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    @endif
</div>

    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
         @endforeach
    </ul>

    <form action="{{route('crud.edit')}}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" id="prenom" name="id"value="{{$ouvrier->id}}" >

  <div class="form-group">
    <label for="nom">prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom"value="{{$ouvrier->prenom}}">
    
    </div>

    <div class="form-group">
    <label for="Prenom">nom</label>
    <input type="text" class="form-control" id="nom" name="nom"value="{{$ouvrier->nom}}">
    </div>

    <div class="form-group">
    <label for="Prenom">adresse</label>
    <input type="text" class="form-control" id="Prenom" name="adresse"value="{{$ouvrier->adresse}}">
    </div>
    <div class="form-group">
    <label for="Prenom">Telephone</label>
    <input type="text" class="form-control" id="Prenom" name="telephone"value="{{$ouvrier->telephone}}">
    </div>
    <div class="form-group">
    <label for="Classe">image</label>
    <input type="file" class="form-control" id="Classe" name="img">
    </div>
   <br>
  <button type="submit" class="btn btn-primary">AJOUTER</button>

    <a href="layouts.Crud.index" class="btn btn-danger">Revenir à la liste des étudiants</a>

</form>

</div>
   
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>