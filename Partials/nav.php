<!-- Barra di navigazione -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- Logo del sito -->
    <a class="navbar-brand" href="#">Polo Stream</a>
    <!-- Bottone per mostrare/chiudere la barra di navigazione su dispositivi mobili -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Contenuto della barra di navigazione -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Elenco di link alla sinistra della barra -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Link alla pagina Home -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <!-- Link alla pagina Film -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Film</a>
        </li>
        <!-- Link alla pagina Serie -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Serie</a>
        </li>
        <!-- Link alla pagina Documentari -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Documentari</a>
        </li>
        <!-- Link alla pagina I piu' votati -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">I piu' votati</a>
        </li>
        <!-- Link con dropdown dei generi -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Generi
          </a>
          <!-- Dropdown dei generi -->
          <ul class="dropdown-menu">
            <!-- Link ad ogni genere -->
            <li><a class="dropdown-item" href="#">Azione</a></li>
            <li><a class="dropdown-item" href="#">Romantico</a></li>
            <li><a class="dropdown-item" href="#">Drammatico</a></li>
            <li><a class="dropdown-item" href="#">Storia vera</a></li>
            <li><a class="dropdown-item" href="#">Comico</a></li>
            <!-- Separatore tra i link dei generi e il link per la ricerca avanzata -->
            <li><hr class="dropdown-divider"></li>
            <!-- Link per la ricerca avanzata -->
            <li><a class="dropdown-item" href="#">Ricerca per genere avanzata</a></li>
          </ul>
        </li>
        <!-- Link disabilitato per la modifica del database -->
        <li class="nav-item">
          <a class="nav-link disabled">Modifica database</a>
        </li>
      </ul>
      <!-- Barra di ricerca -->
      <form class="d-flex" role="search">
        <!-- Campo di ricerca -->
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <!-- Bottone per avviare la ricerca -->
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>