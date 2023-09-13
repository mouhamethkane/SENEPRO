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
        <section class="bg-warning"><br>
        <div class="container bg-dark text-white">
            <h3>
                <div class="row">
                    <div class="col bg-white rounded-circle text-dark">
                        <center>BIENVENU</center><br>

                    </div>
                </div>
         <div class="row">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt molestias, 
                    dolores sapiente impedit voluptatibus tempore inventore vero 
                    ratione totam omnis quo earum in, nobis amet, minus soluta consequuntur voluptates?</p>
            </div>
                    <div class="col-3">
                        <center><img src="{{asset('/image/coiffureh.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"></center>

                    </div>
                    <div class="col-3">
                        <center><img src="{{asset('/image/coiffureh.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white ">
            <h1>
                <center><strong>Voici la liste des ouvriers de méme dans les regions differentes </strong> </center>
            </h1>
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
                @endforeach 
             </div> 
            </div>
    
@endsection 
  