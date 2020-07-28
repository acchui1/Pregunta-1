<?php

$conn=mysqli_connect("localhost:33066","anachui","123456");
mysqli_select_db($conn,"flujo");
if(!$conn){
	die("No hay conexion:".mysql_connect_error());
}

?>