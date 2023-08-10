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
                        <center>MASSEYE GNING</center>
                        <h5 class="text-center">CHAUFFEUR</h5>
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
                        <center><img src="{{asset('/image/chauffeur.jpg')}}" class="rounded-circle bg-dark" width="60%" height="90%"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white rounded-pill">
            <h1>
                <center><strong>Voici les parcours de Masseye Gning</strong> </center>
            </h1>
        </div>
            <div class="container bg-white">
                <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/ch1.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Dakar-Tamba</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/ch2.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Dakar-Ziguinchor</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/ch3.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Dakar-kaolack</h5>
                        <a href="/coiffeurprofil" class=""></a>
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
                    <img src="{{asset('/image/ch4.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Dakar-Matam</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/ch5.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Dakar-Gambie</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/ch6.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Dakar-Thies</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                </div> 
            <div class="container">
            <h1 class="text-center text-dark">Mettez vos commentaire<h1>
            </div>
@endsection 
  