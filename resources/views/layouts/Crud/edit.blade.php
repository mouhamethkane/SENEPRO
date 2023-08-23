@extends("layouts.app")

@section("title", "Modification d'un étudiant")

@section("content")
    <div class="row">
        <h3>Formulaire de modification d'un étudiant</h3>
        <form 
        enctype="multipart/form-data" 
        action="{{ route('ouvrier.create', $ouvrier->id) }}" 
        method="post">
        @csrf
        @method("PUT")
        @include('layouts.Crud.modifier')
    </form>
    </div>
@endsection