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
                        <center>YATMA NDIAYE</center>
                        <h5 class="text-center">TAPISSER</h5>
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
                        <center><img src="{{asset('/image/t7.jpg')}}" class="rounded-circle bg-dark" width="50%" height="70%"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white rounded-pill">
            <h1>
                <center><strong>Voici les realisations de Yatma Ndiaye</strong> </center>
            </h1>
        </div>
            <div class="container bg-white">
                <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/t1.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Salle de bain</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/t2.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                        <h5 class="card-title">Salons</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/t3.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Salons</h5>
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
                    <img src="{{asset('/image/t4.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Salons</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/t5.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Salons</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/t6.jpg')}}" class="rounded bg-dark" width="370" height="250"alt="mass"><br><br>
                    <h5 class="card-title">Salons</h5>
                        <a href="/coiffeurprofil" class=""></a>
                    </div>
                    </div>
                </div>
                </div> 
            <div class="container">
            <h1 class="text-center text-dark">Mettez vos commentaire<h1>
            </div>
@endsection 
  