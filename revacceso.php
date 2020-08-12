<?php
	/*
	• revaceso.php: revisa el acceso y si los datos son correctos dirige al usuario a
listaanuncios.php
	*/
$mail = $_POST["email"];
	$pas = $_POST["pass"];

	require_once("conexion_pdo.php");
	// Creamos el objeto 
	$db = new Conexion();
	
	$dbTabla='p02usuarios'; 

	$consulta = "SELECT COUNT(*) FROM $dbTabla WHERE email=:log AND password=:pas"; 
	$result = $db->prepare($consulta);
	$result->execute(array(":log" => $mail, ":pas" => md5($pas)));
	$total = $result->fetchColumn();


	if($total==1){

			$consulta = "SELECT * FROM $dbTabla WHERE email=:log AND password=:pas"; 
			$result = $db->prepare($consulta);
			$result->execute(array(":log" => $mail, ":pas" => md5($pas)));
			
			if (!$result) { 
				print "<p>Error en la consulta.</p>\n";
				//header("location:index.php");
			}else{
				session_start();
				$fila=$result->fetchObject();
				
				$_SESSION["idusuari"] = $fila->id;
				$_SESSION["nom"] = $fila->nombre;
				header("location:listaanuncios.php");
			}
	}else{
		header("location:index.php");
	}

?>
