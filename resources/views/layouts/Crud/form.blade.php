<div class="form-floating mb-3">
    <input value="@isset($student->name){{ $student->name }}@endisset" type="text" class="form-control" name="name" id="name" placeholder="prenom :">
    <label for="name">prenom:</label>
</div>
<div class="form-floating mb-3">
    <input value="@isset($ouvrier->nom){{ $ouvrier->nom }}@endisset" type="text" class="form-control" name="nom" id="nom" placeholder="nom : ">
    <label for="nom">nom : </label>
</div>
<div class="mb-3">
    <label for="adresse" class="form-label">
        adresse
    </label>

</div>
<div class="form-floating mb-3">
    <input value="@isset($ouvrier->telephone){{ $ouvrier->telephone }}@endisset" class="form-control" placeholder="Votre numéro de téléphone" type="telephone" name="telephone" id="telephone">
    <label for="phone">
        Votre numéro de téléphone :
    </label>
</div>
<div class="form-floating mb-3">
</div>

<div class="mb-3">
    <label for="img" class="form-label">
        Votre Image
    </label>
    <input class="form-control" type="file" name="img" id="img">
</div>
<div class="d-grid gap-2 mb-3">
    <button type="submit" class="btn btn-primary">
        Enregistrer cet étudiant
    </button>
</div>