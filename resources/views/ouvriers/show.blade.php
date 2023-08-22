@extends('layouts.app')

@section("title", "Enregistrement d'un ouvrier")

@section("content")
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach    
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif 
        <div class="card">
          <div class="card-body">
          <img src="{{asset('avatar/'. $article->avatar)}}"  class="card-img-top" height="200px" alt="">
            <h5 class="card-title my-4">{{ $article->titre }}</h5>
            <p class="card-text">{{ $article->contenu }}</p>
            <p class="card-text">{{ $article->categorie }}</p>
          </div>
        </div>               
@endsection 