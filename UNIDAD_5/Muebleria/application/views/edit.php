<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>

<br>
<hr>
<div class="row"> 
	<div class="col-lg-4 col-lg-offset-4 col-xs-12">
		<form action="<?php echo base_url();?>index.php/Login/editar_mu" method="POST">
		  <div class="form-group">
		    <label for="text">ID:</label>
		    <input type="text" class="form-control" name="id">
		  </div>
		  <div class="form-group">
		    <label for="text">Modelo:</label>
		    <input type="text" class="form-control" name="modelo">
		  </div>
		  <div class="form-group">
		    <label for="text">Material:</label>
		    <input type="text" class="form-control" name="material">
		  </div>
		  <div class="form-group">
		    <label for="carrera">Color:</label>
		    <input type="text" class="form-control" name="color" >
		  </div>
		   <div class="form-group">
		    <label for="carrera">Tipo:</label>
		    <input type="text" class="form-control" name="tipo" >
		  </div>

		
		  <input type="submit" name="Guardar">

		</form>
	</div>
</div>
</head>
<body>
</body>
</html>