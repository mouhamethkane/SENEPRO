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
                        <center>PAPE ABDOU BITEYE</center>
                        <h5 class="text-center">CARROLLEUR</h5>
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
                        <center><img src="{{asset('/image/carreleur8.jpg')}}" class="rounded-circle bg-dark" width="50%" height="70%"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white rounded-pill">
            <h1>
                <center><strong>Voici les realisations de Pape Abdou Biteye</strong> </center>
            </h1>
        </div>
            <div class="container bg-white">
                <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c1.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Cuisine</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c2.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Salon</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c3.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Chambre</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                </div>
    <!-- ***********************************************************************************      -->
    <div class="container bg-white">
                <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c4.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Appartement</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c5.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Cuisine</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/c6.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Batiment</h5>
                        <a href="#" class=""></a>
                    </div>
                    </div>
                </div>
                </div> 
            <div class="container">
                <hr>
                <h1 class="text-center">Les commentaires</h1>
                <hr>
                <h5>nom complets</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ratione cum dicta, vitae sit architecto distinctio veniam illo error deleniti a eos enim quidem modi ipsa ullam est magnam delectus!</p>
                <h6>date et heure</h6>
                <hr>
                <hr>
                <h5>Mouhamed Kane</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ratione cum dicta, vitae sit architecto distinctio veniam illo error deleniti a eos enim quidem modi ipsa ullam est magnam delectus!</p>
                <h6>07/10/2023 à 11h:30mn</h6>
                <hr>
                <hr>
                <h5>Oumou Cisse</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ratione cum dicta, vitae sit architecto distinctio veniam illo error deleniti a eos enim quidem modi ipsa ullam est magnam delectus!</p>
                <h6>09/11/2023 à 01h:45mn</h6>
                <hr>
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
  