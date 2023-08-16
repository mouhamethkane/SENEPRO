@extends('layouts.app')

@section('content')

    <h1 class="text-center">Modifier un article</h1>

 
   <form action="{{route('update',$article->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>

    @endif
    @if($errors)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
   <div class="mb-3">
  <label for="titre" class="form-label">Titre de l'article</label>
  <input type="text" class="form-control" name="titre" id="titre" value="{{$article['titre']}}" placeholder="Donner un titre">
</div><br>
<div class="mb-3">
  <label for="contenu" class="form-label">Contenu</label>
  <textarea class="form-control" name="contenu"  id="comtenu" rows="3">{{$article['contenu']}}</textarea>
</div><br>
<div class="mb-3">
  <label for="catregorie" class="form-label">Categorie</label>
  <input type="text" class="form-control" name="categorie"  id="categorie" value="{{$article['categorie']}}" placeholder="Donner une categorie">
</div>
<div class="mb-3">
  <label for="avatar" class="form-label">Image</label>
  <img src="{{asset('avatar/'. $article->avatar)}}" alt="" width="100" height="60">
  <input type="file" class="form-control border border-secondary" name="avatar"  id="avatar" value="{{ old('image')}}" placeholder="Ajouter un image">
</div>
</div>
<button type="submit" class="btn btn-lg btn-secondary">Modifier un article</button>
    </form>
    <br><br>
 @endsection
