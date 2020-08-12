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
$expresio=$_GET["categoria"];
$db = new Conexion();

 
    
//$dbTabla='P02anuncios';
$consulta = "SELECT p02anuncios.id, titulo, precio as pr, p02categorias.nombre as cat, p02usuarios.nombre as usr
FROM p02anuncios, p02categorias, p02usuarios 
WHERE categoria=p02categorias.id 
AND propietario=p02usuarios.id 
AND categoria=$expresio 
ORDER BY fechahora desc";


$result = $db->prepare($consulta);
$result->execute(); 
$total = $result->fetchColumn();


if ($total>0) { 
	
	// En tres líneas 
	$consulta = "SELECT p02anuncios.id, titulo, precio as pr, p02categorias.nombre as cat, p02usuarios.nombre as usr
FROM p02anuncios, p02categorias, p02usuarios 
WHERE categoria=p02categorias.id 
AND propietario=p02usuarios.id 
AND categoria=$expresio 
ORDER BY fechahora desc"; 
	$result = $db->prepare($consulta); 
	$result->execute();
	
	if (!$result){ 
		print "<p> &nbsp &nbsp &nbsp &nbsp Error en la consulta. </p>\n";
	}else{ 
		echo  "<div class='row rowa'>";
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
		echo '</div>';
		
}
}else{
	
	print "<h2> &nbsp &nbsp &nbsp &nbsp No hi ha resultats per <em>$expresio</em></h2>";
}
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