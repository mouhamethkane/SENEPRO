@extends("layouts.app")



@section("content")
<div class="card uper mt-5">
    <div class="card-header">
      <strong>Ajouter une metier</strong>
    </div>

    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
<h1>Pour cette partie la route post et la methode n'est pas encore fait je te la laisse ok s'il y a des souci rék on fait un meet pour en discuter</h1>
<form action="" method="post">
    @csrf
    @method("POST")
    <input type="text" name="id" id="id" value="{{ $ouvrier->id }}" hidden>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea type="text" class="form-control border border-secondary" name="description" id="description" placeholder="Donner une description"></textarea>
    </div>
    <div class="mb-3">
        {{-- <label for="image" class="form-label">image</label> --}}
        <input type="file" class="form-control border border-secondary" name="image" id="image" placeholder="Donner une image">
    </div>
    <button type="submit" class="btn btn-lg btn-secondary">Envoyer</button>
</form>
    </div>
</div>

@endsection
