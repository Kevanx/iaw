<html>
<head>

</head>
<body>
	<?php
include 'connectdb.php';
$conn = open_con();
 $usuario = $_POST["usuari"];
 $pass = $_POST["password"];

$usuario_valido="";
$listado="SELECT * FROM usuaris WHERE usuari="."'$usuario'";
$datos = mysqli_query ($conn,$listado);

while ($fila = mysqli_fetch_array($datos)){
	$usuario_valido=$fila["usuari"];
	$password_valida=$fila["password"];
	$rol=$fila["id_rol"];
}
if ($usuario_valido==$usuario and $password_valida==$pass and $rol=="1"){

	session_start();
	$_SESSION['alumno']="$usuario";
header("Location: alumno.php");
}
elseif ($usuario_valido==$usuario and $password_valida==$pass and $rol=="2"){
	$_SESSION['exalumno']="$usuario";
header("Location: exalumno.php");

}
elseif ($usuario_valido==$usuario and $password_valida==$pass and $rol=="3"){
	session_start();
	$_SESSION['empresa']="$usuario";
header("Location: empresa.php");

}
else{
	header("Location: index.html");

}
close_con($conn);





 ?>
</body>
</html>
