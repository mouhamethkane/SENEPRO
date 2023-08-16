@extends('layouts.app')

@section('content')

    <h1 class="text-center">Ajouter un article</h1>

 
   <form action="{{route('article.store')}}" method="POST">
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
  <input type="text" class="form-control border border-secondary" name="titre" id="titre" value="{{ old('titre')}}" placeholder="Donner un titre">
</div><br>
<div class="mb-3">
  <label for="contenu" class="form-label">Contenu</label>
  <textarea class="form-control border border-secondary" name="contenu"  id="comtenu" rows="3">{{ old('contenu')}}</textarea>
</div><br>
<div class="mb-3">
  <label for="catregorie" class="form-label">Categorie</label>
  <input type="text" class="form-control border border-secondary" name="categorie"  id="categorie" value="{{ old('categorie')}}" placeholder="Donner une categorie">
</div>
</div>
<button type="submit" class="btn btn-lg btn-secondary">Ajouter un article</button>
    </form>
    <br><br>
 @endsection
