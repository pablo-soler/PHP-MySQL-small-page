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
<title>INSERTAANUNCIO</title>
</head>


<body>
	
	
	<?php include('nav.php'); ?>
</br></br>
	
	<div class="row">
<?php 
		require_once("conexion_pdo.php");


    $db = new Conexion();
	$dbTabla='p02anuncios'; 
	
$titulo = $_POST["titulo"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$vendido = 0;
$fechahora = date("Y-m-d H:i:s");
$categorias = $_POST["categorias"];
$propietario = $_SESSION["idusuari"];


	$consulta = "INSERT INTO $dbTabla (titulo, precio, descripcion, vendido, fechahora, categoria, propietario) VALUES(:t, :pr, :d, :v, :f, :c, :p)";
	
	$result = $db->prepare($consulta);

	
	if($result->execute(array(":t" => $titulo, ":d" => $descripcion, ":pr" => $precio, ":v" => $vendido, ":f" => $fechahora, ":c" => $categorias, ":p" => $propietario)))
	
	{
	print "<h5 class='alert'> &nbsp &nbsp &nbsp Registro insertado correctamente.</h5>\n"; 
 } 
	else {
	print "<h5 class='alert' >  &nbsp &nbsp &nbsp Error al insertar el registro.</h5>\n"; 
}
    
?>
	</div>
	


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" ></script>
	
	
	
</body>
</html>