<?php
session_start();
if((!isset($_SESSION["idusuari"])) || ($_SESSION["idusuari"]<0)){
	header("location:index.php");
}
?>