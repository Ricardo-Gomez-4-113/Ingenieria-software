<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	
	<title>Eliminar</title>
</head>
<body>
	<div class="row"> 
<title>Eliminar</title>
<div class="col-lg-4 col-lg-offset-4 col-xs-12">
	<form action="<?php echo base_url();?>index.php/Inicio/del_us" method="POST">
	<form class="form-inline">
  <div class="form-group mb-2">
    <label for="tex" class="sr-only">ID</label>
    <input type="text" class="form-control" name="id" placeholder="Numero de control">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">ID</label>
    <input type="text" class="form-control" name="ID2" placeholder="Confirmar numero de control">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Confirmar eliminacion</button>

</body>
</html>