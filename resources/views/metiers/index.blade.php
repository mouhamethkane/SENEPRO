@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>nom</td>
          <td>domaine</td>
          <td>image</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($metiers as $metier)
        <tr>
            <td>{{$metier->id}}</td>
            <td>{{$metier->nom}}</td>
            <td>{{$metier->domaine}}</td>
            
            <td><img src="/metierprofil/{{ $metier->image }}" width="64" height="64"></td>
            
            <td><a href="{{ route('metiers.edit',$metier->id) }}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('metiers.destroy',$metier->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
