<!DOCTYPE html>
<html>
<head>
	<title>Muebles</title>
</head>
<body>
	 <?php
        $sql=  mysqli_query("select * from foto");
        while($res=  mysqli_fetch_array($sql)){
            echo $res["nombre"]."<br>";
            echo '<img src="'.$res["foto"].'" width="100" heigth="100"><br>';
        }
        ?>

</body>
</html>