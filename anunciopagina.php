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
<title>buscar anuncio</title>
</head>

<body>
	<?php include('nav.php'); ?>
    </br></br></br>
	<?php
$expresio=$_GET["idanuncio"];
$db = new Conexion();
    
$consulta = "SELECT * FROM p02anuncios 
	WHERE id=$expresio";
$result = $db->prepare($consulta);
$result->execute(); 
$fila = $result->fetchObject();

 $consulta2 = "SELECT * FROM p02categorias
    WHERE id= $fila->categoria";
	$result2 = $db->prepare($consulta2);
	$result2->execute(); 
	$fila2 = $result2->fetchObject();


  echo "<div class='align-content-center busqueda' >";
		echo "<div  class='main-wrapper  row anuncio2' >";
echo "<div style='background-color:rgba(0,0,0,0.30);' class=' section col-12 col-sm-6 col-md-6'> </div>";
echo "<div class='section  col-6 col-md-6' >";
echo "<h1 class=''>$fila->titulo</h1>";
echo "<h5>En la categoria $fila2->nombre subido por el usuario $fila->propietario </h5>";
if($fila->vendido == 0){
echo "<h5 class='text-success'>Está disponible </h5>";
}
else{
	echo "<h5 class='text-danger'>NO ESTÁ DISPONIBLE </h5>";
}
echo "<p class=''> $fila->descripcion </p>";
echo "<p class=''> $fila->fechahora </p>";
echo '</div>';
echo '</div>';
echo '</div>';


//Cerramos conexión
$db=NULL;
?>

	
	<?php /*buscaranuncios.php: Recibe por GET una expresión de búsqueda que utiliza para realizar una
búsqueda fulltext en la tabla P02anuncios sobre los campos título y descripción. Muestra los
anuncios resultado de la búsqueda y con la misma estructura que en la página
listaanuncios.php*/ ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" ></script>
	
</body>
</html>