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
<title>NUEVO ANUNCIO</title>
</head>


<body>
	<!--
	-->
	
	<?php include('nav.php'); ?>
    </br> </br></br></br></br></br></br>
		<h5 class="alert">Hola  <?php echo $_SESSION["nom"]; ?> rellene los datos para crear el nuevo anuncio</h5>	
	<div class="align-content-center busqueda">
		<div class="centrado align-content-center  ">
		<h1  for="exprbusqueda">NUEVO ANUNCIO </h1>
	<form class="form" name="insertaranuncio" action="insertaanuncio.php" method="post">
		<p class="margen">TITULO:</p>
    <input type="text"  class="form-control inputl mr-sm-2" name="titulo" id="titulo"  placeholder="Introduce el titulo">
		<p class="margen">PRECIO:</p>
    <input type="text"  class="form-control inputl mr-sm-2" name="precio" id="precio" placeholder="introduce el precio en €">
		<p class="margen">DESCRIPCIÓN:</p>
    <input type="text"  class="form-control inputl mr-sm-2" name="descripcion" id="descripcion" placeholder="introduce la descripción">
		
		 <p class="margen">CATEGORIA</p>
        <select class="form-control inputl mr-sm-2"  name="categorias" id="categorias" >
        <option selected value="1">Muebles</option> 
        <option  value="2">Vehículos</option> 
        <option  value="3">Ropa</option> 
        <option  value="4">Juguetes</option> 
        </select>
		
    <input type="submit"  class="btnl margen btn-outline-success" value="INSERTAR EL NUEVO ANUNCIO"></form>
	</div></div>

	
	<div class="row">

	</div>
	


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" ></script>
	
	
	
</body>
</html>