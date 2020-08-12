<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css" crossorigin="anonymous">
<title>FORMULARIO DE ACCESO</title>
</head>
<body>
	<div class="container">
  <div class="row">
    <div class="Absolute-Center is-Responsive">
      
      <div class="col-sm-12 col-md-10 col-md-offset-1">
		  <h2 class="text-center">PABLO SOLER PRÁCTICA 2 </h2>
        <form action='revacceso.php' method='POST' id="loginForm">
          <div class="form-group input-group">
	
            <input class="form-control inputl" type="email" name='email' placeholder="mail@dominio.com"/>          
          </div>
          <div class="form-group input-group"> 
            <input class="form-control inputl" type="password" name='pass' placeholder="pass"/>     
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-def btn-block btnl">Login</button>
          </div>
        </form>        
      </div>  
    </div>    
  </div>
</div>

	<?php
	/* index.php: Formulario de acceso a la aplicación donde el usuario debe introducir su email y
password para acceder. Envia los datos a revaceso.php por POST */
	
	?> 
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" ></script>
	
	
</body>
</html>