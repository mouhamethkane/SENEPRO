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
        <div class="container bg-white ">
                <div class="row"> 
                  
                <div class="col-sm-12 my-4">
                    <div class="card">
                    <div class="card-body">
                      <img src="{{asset('ouvrierprofil/'. $ouvrier->img)}}"  class="card-img-top" height="500px" alt="">
                        <p class="card-text"><strong>{{ $ouvrier->prenom }}</strong></p>    
                        <p class="card-text"><strong>{{ $ouvrier->nom }}</strong></p>
                        <p class="card-text"><strong>{{ $ouvrier->adresse }}</strong></p> 
                        <p class="card-text"><strong>{{ $ouvrier->telephone }}</strong></p>
                    </div>
                    </div>
                </div>
               
</div>
</div>  
@endsection 