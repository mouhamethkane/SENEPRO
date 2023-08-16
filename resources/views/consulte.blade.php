@extends('layouts.app')

@section('content')

    <h1 class="text-center">Voir tous les article</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th scope="col">Categorie</th>
      <th scope="col">img</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)

   
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->titre}}</td>
      <td>{{$article->contenu}}</td>
      <td>{{$article->categorie}}</td>
      <td><img src="{{asset('avatar/'. $article->avatar)}}" alt="" width="100" height="60"></td>
      <td>
        <a href="{{route('edit',$article->id)}}" class="btn btn-primary">Modifier</a>
        <a href="{{route('delete',$article->id)}}" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        <br><br><br>
 @endsection
