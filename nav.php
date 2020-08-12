<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <?php echo $_SESSION["nom"];?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="listaanuncios.php"> LISTA DE ANUNCIOS </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nuevoanuncio.php">INSERTAR ANUNCIO</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="index.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>