
	<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
<?php
include 'connectdb.php';
$conn = open_con();

if (!$conn) {
  die("Error a la connexió " . mysqli_connect_error());
}
else{
 echo "S'ha connectat correctament";
}
$codigo = utf8_decode($_POST['codigo']);
$vacante = utf8_decode($_POST['titol_vacant']);
$descripcio_vacant = utf8_decode($_POST['descripcio_vacant']);
$descripcio_treball = utf8_decode($_POST['descripcio_treball']);
$tipus = utf8_decode($_POST['tipus']);
$empresa = utf8_decode($_POST['empresa']);

mysqli_query($conn,"UPDATE registrevacant SET titol_vacant = '$vacante',descripcio_vacant = '$descripcio_vacant',descripcio_treball = '$descripcio_treball',tipus_vacant = '$tipus'
WHERE id_vacant = '$codigo'");
echo "Se ha modificado la vacante";
header("Location: empresa.php");


?>
</body>
</head>
</html>
