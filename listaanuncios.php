<?php
include "protege.php";
require_once("conexion_pdo.php");
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css?v=1" crossorigin="anonymous">
<title>LISTA DE ANUNCIOS</title>
</head>


<body>
	
	
	
	<div class=" busqueda fixed-top">
		<div class='row align-content-center '>
     <br/> <br/>  <br/>
		<div class="section2 justify-content-end col-sm-6 col-md-6 ">
		<h5  for="exprbusqueda">SELECCIONA UNA CATEGORÍA </h5>
	<form class="form-inline d-flex flex-wrap " name="busqueda" action="buscaranuncios.php" method="GET">
  <div class="input-group-prepend">
    <button class="btn btnl dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">selecciona para buscar </button>
    <div class="dropdown-menu">
	   <?php

    
	   $db = new Conexion();
    
$consulta = "SELECT id, nombre
FROM p02categorias";
$result = $db->prepare($consulta);
$result->execute(); 
foreach($result as $valor){
	echo "<a class='dropdown-item' href= \" categoria.php?categoria=$valor[id]\"> $valor[nombre] </a> ";
	
}

			?>
	   
         </div>
</div>
		</form>
	</div>
		<div class=" section2 align-content-center col-6 col-md-6 ">
		<h5  for="exprbusqueda">INTRODUCE UNA BÚSQUEDA </h5>
	<form class="form-inline d-flex flex-wrap " name="busqueda" action="buscaranuncios.php" method="GET">
    <input type="search"  class="form-control inputl mr-sm-2" name="exprbusqueda" id="exprbusqueda" placeholder="Introduce una palabra">
    <input type="submit"  class="btnl btn-outline-success my-2 my-sm-0" value="BUSCAR"></form>
	</div></div>
	</div>
	
    <?php include('nav.php'); ?>
<br/> <br/> <br/> <br/> <br/>  <br/> <br/> <br/> <br/> 
	 <h5 class="alert">  &nbsp &nbsp &nbsp &nbsp Hola  <?php echo $_SESSION["nom"]; ?> estos son los anuncios actuales</h5>
	<div class="row rowa">
    	
<?php
    $db = new Conexion();
   // $dbTabla='P02anuncios';
    
    $consulta = "SELECT p02anuncios.id, titulo, precio as pr, p02categorias.nombre as cat, p02usuarios.nombre as usr
    FROM p02anuncios, p02categorias, p02usuarios
    WHERE categoria=p02categorias.id
    AND propietario=p02usuarios.id
    ORDER BY fechahora desc";
    
    $result = $db->prepare($consulta); 
    $result->execute();

if (!$result){ 
	print "<p> Error en la consulta. </p>\n";
}else{ 
    
	foreach($result as $valor){
		
		echo "<div  onClick='location.href= \" anunciopagina.php?idanuncio=$valor[id]\" ' class='card anuncio' style='width: 18rem;'>";
echo "<img class='card-img-top' src='imgejemplo.svg' alt='Card image cap'>";
echo "<div class='card-body'>";
echo "<h2 class='colorprecio card-title'> $valor[pr] €</h2>";
echo "<h5 class='card-title'>$valor[titulo]</h5>";
echo "<p class='card-text'>En la categoria $valor[cat] subido por el usuario $valor[usr] </p>";
echo '</div>';
echo '</div>';
		
        /*
        print " <a href=\"anuncio.php?idanuncio=$valor[id]\">Ver anuncio<p>\n\n";
        */
    }
}
    ?>
	</div>
	


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" ></script>
	
	
	
</body>
</html>