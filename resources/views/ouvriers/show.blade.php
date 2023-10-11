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
        <!-- <div class="card">
          <div class="card-body">
          <img src="{{asset('avatar/'. $article->avatar)}}"  class="card-img-top" height="200px" alt="">
            <h5 class="card-title my-4">{{ $article->titre }}</h5>
            <p class="card-text">{{ $article->contenu }}</p>
            <p class="card-text">{{ $article->categorie }}</p>
          </div>
        </div>                -->

        <div class="container bg-white ">
                <div class="row"> 
                  @foreach ($ouvriers as $ouvriers)
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                      <img src="{{asset('ouvrierprofil/'. $ouvriers->img)}}"  class="card-img-top" height="200px" alt="">
                        <p class="card-text">{{ $ouvriers->prenom }}</p>    
                        <p class="card-text">{{ $ouvriers->nom }}</p>
                        <p class="card-text">{{ $ouvriers->adresse }}</p> 
                        <p class="card-text">{{ $ouvriers->telephone }}</p>
                        <h3 class="card-title my-4"><a href="/ouvriers/{{ $ouvriers->id }}" class="btn btn-primary">{{ $ouvriers->nommetier  }}</h3></a>        
                    </div>
                    </div>
                </div> 
@endsection 