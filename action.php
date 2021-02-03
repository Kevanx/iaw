
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

					$username = utf8_decode($_POST['usuari']);
					$empresa = utf8_decode($_POST['empresa']);
					$contacte = utf8_decode($_POST['contacto']);
					$email = utf8_decode($_POST['e-mail']);
					$password = utf8_decode($_POST['password']);
					$rol = utf8_decode($_POST['rol']);


				$query = mysqli_query($conn,"SELECT id_rol FROM rols WHERE rol ='".$rol."'");
				$result = $query->fetch_array()[0] ?? '';
					if(!empty($query) AND mysqli_num_rows($query) > 0){
				$sql = mysqli_query($conn,"INSERT INTO usuaris(usuari, empresas, contacte, email, password, id_rol)VALUES('".$username."', '".$empresa."', '".$contacte."', '".$email."', '".$password."', '".$result."')");
					}else{
					    echo "Team is not valid!!!";
					}


				/*	$sql = "INSERT INTO usuaris (usuari, empresas, contacte, email, password)
					VALUES ('".$username."', '".$empresa."', '".$contacte."', '".$email."', '".$password."')";

					if ($conn->query($sql) === TRUE) {
						echo "Usuari enregistrat correctament";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

				close_con($conn);
				*/
			?>
		<div class="header">
	<h1>Ya te has registrado!	<a href="index.html">Logeate con tu usuario</a>
</h1>
	</div>

</body>
</html>
