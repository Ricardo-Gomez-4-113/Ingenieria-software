<?php 
$data = $this->Usuarios->verusuarios();
?>
<!DOCTYPE html>
<html>
<head>
<title>Usarios</title>
<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/datepicker3.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/styles.css");?>" />
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>" />
  <script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>
<body>

<h1>ITPA</h1>
<p>Tabla de usuarios</p> | <a href="" class="btn btn-success" data-toggle="modal" data-target="#modal_cl">Nuevo</a>
<div class="row">
  <div class="col-xs-6">

<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Nombre</th> 
    <th>Apellido</th>
    <th>Carrera</th>
  </tr>
<?php 
	foreach($data as $fila)
	{
 ?>
  <tr>
    <td class="form"><?=$fila['id'];?></td>
    <td><?=$fila['nombre'];?></td> 
    <td><?=$fila['apellido_p'];?></td>
    <td><?=$fila['carrera'];?></td>
  </tr>
  <tr>
    <td></td>
    <td></td> 
    <td></td>
    <td></td>
  </tr>
<?php 
}
?>

</table>
</div>
</div>
<div class="modal fade" id="modal_cl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel1">Agregar Usuario</h4>
          </div>
          <div class="modal-body">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form action="<?php echo base_url();?>index.php/Admin/insertar_usuario" method="post" >
            <label for="placa">Nombre</label>
            <input type="text" class="form-control" placeholder="" name="nombre"  minlength="3" maxlength="40" required>
          <br>
          <label for="placa">Apellido P.</label>
            <input type="text" class="form-control" placeholder="" name="apellido_p" minlength="3" maxlength="40" required>
          <br>
          <label for="placa">Apellido M.</label>
            <input type="text" class="form-control" placeholder="" name="apellido_m" minlength="3" maxlength="40">
          <br>
          
           
            <br>
            <label for="placa">Email</label>
            <input type="email" class="form-control" placeholder="" name="email" minlength="10" maxlength="40" required>
          <br>
          <label for="">Area</label>
            <select class="form-control" name="area">
               <?php
                  foreach ($data_select_dep as $i => $area)
                  echo '<option value="',$i,'" class="form-control">',$area,'</option>';?>
                </select>
            <br>
            <input type="submit" class="btn btn-success" value="Guardar" name="Guardar"></td>
          </form>
          </div>
        </div>
      </div>
    </div> 
<script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/chart-data.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/easypiechart.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/easypiechart-data.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/custom.js"></script>
  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
    <script type="text/javascript">
    function ConfirmDemo() {
    //Ingresamos un mensaje a mostrar
    var mensaje = confirm("¿Seguro que deseas Eliminar?");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
    alert("¡Gracias por aceptar!");
    }
    //Detectamos si el usuario denegó el mensaje
    else {
    alert("¡Haz denegado el mensaje!");
    }
    }
  </script>
    
</body>
</html>
</body>
</html>