<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
    <!-- <a class="navbar-brand" href="#">Gestion des ouvrier</a> -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="/" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
           
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion des ouvrier</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{ route('ouvrier.create') }}">Nouvel ouvrier</a>
                    <a class="dropdown-item" href="/listouvrier">Liste des ouvriers</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Article de blog</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="/article">Ajouter un article</a>
                    <a class="dropdown-item" href="/consulte">Consulter un article</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion des metiers</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{route('metiers.create')}}">Nouvel metier</a>
                    <a class="dropdown-item" href="{{route('metiers.index')}}">Liste des metiers</a>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="/contact" aria-current="page">Contactez-Nous<span class="visually-hidden">(current)</span></a>
            </li>
        </ul>
       
    </div>

    