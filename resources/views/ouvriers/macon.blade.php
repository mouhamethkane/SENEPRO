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
                        <center>vous etes dans la categorie des maçon</center><br>

                    </div>
                </div>
         <div class="row">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt molestias, 
                    dolores sapiente impedit voluptatibus tempore inventore vero 
                    ratione totam omnis quo earum in, nobis amet, minus soluta consequuntur voluptates?</p>
            </div>
                    <div class="col-3">
                        <center><img src="{{asset('/image/maçon-africain-travaillant-avec-la-spatule-et-la-brique-97065923.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"></center>

                    </div>
                    <div class="col-3">
                        <center><img src="{{asset('/image/macon.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"></center>

                    </div>
            </div>
            
         </div>
            </h3>
        </div><br><br>
        <div class="container bg-dark text-white rounded-pill">
            <h1>
                <center><strong>Voici la liste des macon disponiblesa pikine</strong> </center>
            </h1>
        </div>
        <div class="container bg-white">
            <div class="row">
                <div class="col-4 ">
                    <img src="{{asset('/image/macon1.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                  <a href="profilemacon.html"><button class="btn-sm border-primary bg-secondary text-white text-center w-50">OUSMANE DIOP</button></a>  
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon2.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">MODOU FALL</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon3.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">ASSANE NDOUR</p>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <img src="{{asset('/image/macon4.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">ABDOU SECK</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon5.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">LAHAT THIOUNE</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon1.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">MOUSTAPHA MBAYE</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon2.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">MEDOUNE FALL</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon3.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">MODOU DIOP</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon4.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">ASSANE KA</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon5.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">GORA DIOUF</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon1.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">MOUSSA FAYE</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon2.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">CHEIKH NIANG</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon3.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">NGAGNE MBAYE</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon4.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">CHEIKH GAYE</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon5.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">MAME MBAYE</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon1.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">OMAR THIAM</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon2.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">NDIOGOU MBAYE</p>
                </div>
                <div class="col-4">
                    <img src="{{asset('/image/macon3.jpg')}}" class="rounded-circle bg-dark" width="200" height="200"
                        alt="mass"><br><br>
                    <p class="border-primary bg-secondary text-white text-center w-50">KHADIM MBENGUE</p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection 
  