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
                        <center>vous etes dans la categorie des coiffeurs</center><br>

                    </div>
                </div>
         <div class="row">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt molestias, 
                    dolores sapiente impedit voluptatibus tempore inventore vero 
                    ratione totam omnis quo earum in, nobis amet, minus soluta consequuntur voluptates?</p>
            </div>
                    <div class="col-3">
                        <center><img src="{{asset('/image/COIFFURE1.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"></center>

                    </div>
                    <div class="col-3">
                        <center><img src="{{asset('/image/COIFFURE3.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white rounded-pill">
            <h1>
                <center><strong>Voici la liste des coiffeurs disponiblesa dans les differentes region</strong> </center>
            </h1>
        </div>
            <div class="container bg-white">
                <div class="row">
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/coiffeus.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                        <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Dakar.</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">OUMOU CISSE</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/coiffeuse1.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                        <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Thies</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">AMY GUEYE</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/coiffeuse2.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                    <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Louga</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">NDAYE GUEYE</a>
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
                    <img src="{{asset('/image/coiffeuse3.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                    <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Saint Louis</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">SOKHNA NDOUR</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/coiffeuse4.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                    <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Diourbel</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">AWA NDIAYE</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/coiffeus.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                    <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Fatick</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">AMY COLLE NDIAYE</a>
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
                    <img src="{{asset('/image/coiffeuse6.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                    <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Tambacounda</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">ANTA FALL</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/coiffeuse1.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                    <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Ziguinchor</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">NDEYE ASTOU DIOP</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 my-4">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{asset('/image/coiffeuse2.jpg')}}" class="rounded bg-dark" width="370" height="200"alt="mass"><br><br>
                    <h5 class="card-title">Information</h5>
                        <p class="card-text">Region De Sedhiou</p>
                        <a href="/coiffeurprofil" class="btn btn-primary">DIAYNABA THIAM</a>
                    </div>
                    </div>
                </div>
                </div>                
    
@endsection 
  