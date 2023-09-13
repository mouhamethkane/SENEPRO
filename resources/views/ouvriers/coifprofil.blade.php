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
                        <center>DJIBRIL GAYE</center>
                        <h5 class="text-center">COIFFEUR</h5>
                        <h5 class="text-center">TELEPHONE:+221 77 876 54 32</h5>
                    </div>
                </div>
         <div class="row">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt molestias, 
                    dolores sapiente impedit voluptatibus tempore inventore vero 
                    ratione totam omnis quo earum in, nobis amet, minus soluta consequuntur voluptates?</p>
            </div>
                    <div class="col-6">
                        <center><img src="{{asset('/image/coiff0.jpg')}}" class="rounded-circle bg-dark" width="50%" height="90%"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white rounded-pill">
            <h1>
                <center><strong>Voici les realisations de Djibril Gaye</strong> </center>
            </h1>
        </div>
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
                <div class="container">
                <hr>
                <h1 class="text-center">Les commentaires</h1>
                <hr class="col-sm-5">
                <h5>nom complets</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
                    Corrupti ratione cum dicta, vitae sit architecto distinctio<br> 
                    veniam illo error deleniti a eos enim quidem modi ipsa ullam<br> 
                    est magnam delectus!</p>
                <h6>date et heure</h6>
                <hr class="col-sm-5">
                <h5>Mouhameth Kane</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
                    Corrupti ratione cum dicta, vitae sit architecto distinctio<br> 
                    veniam illo error deleniti a eos enim quidem modi ipsa ullam<br> 
                    est magnam delectus!</p>
                <h6>08/06/2023 à 11h:30mn</h6>
                <hr class="col-sm-5">
                <h5>Oumou Cissé</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
                    Corrupti ratione cum dicta, vitae sit architecto distinctio<br> 
                    veniam illo error deleniti a eos enim quidem modi ipsa ullam<br> 
                    est magnam delectus!</p>
                <h6>12/12/2023 à 02h:50mn</h6>
                <hr class="col-sm-5">
            <h1 class="text-center text-dark">Mettez vos commentaire<h1>
            <hr>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="for-content">Votre commentaire</label>
                        <textarea  class="from-control border-secondary" name="content" id="content" cols="70" rows="3"></textarea>
                        <button type="submit" class="btn btn-lg btn-secondary border-secondary mt-3">Soumettre mon commentaire</button>
                    </div>
                </form>
            </div>
@endsection 
  