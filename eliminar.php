
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
echo $codigo;
mysqli_query($conn,"DELETE FROM registrevacant WHERE id_vacant = $codigo");
echo "Se ha eleminado la vacante";
header("Location: empresa.php");


?>
</body>
</head>
</html>
