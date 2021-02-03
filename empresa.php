<?php
session_start();
 ?>
<html>

<head>
  <title>Institut MVM</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="header">

<h1>Hola Empresa</h1>

</div>
<div class="login">
  <table width="400" border="2" cellpadding="2" cellspacing='1'>
          <th> id_vacant</th>
          <th>titol_vacant</th>
          <th>descripcio_vacant</th>
          <th>descripcio_treball</th>
          <th>tipus_vacant</th>
          <th>empresa</th>

   </tr>


</div>

<a href="index.html">Cerrar sesion</a>
<a href="agregar_vacante.html">Agregar</a>
<a href="eliminar_registro.php">Eliminar</a>
<a href="modificar_registro.php">Modificar</a>


<?php
include 'connectdb.php';
$conn = open_con();
$usuari = $_SESSION['empresa'];
$records2 = mysqli_query($conn,"SELECT empresas FROM usuaris WHERE usuari ='".$usuari."'");
$result = $records2->fetch_array()[0] ?? '';
$records = mysqli_query($conn,"SELECT * FROM registrevacant WHERE empresa ='".$result."'");
  while ($course = mysqli_fetch_assoc($records)){

        echo "<tr>";
            echo "<td>".$course['id_vacant']."</td>";
            echo "<td>".$course['titol_vacant']."</td>";
            echo "<td>".$course['descripcio_vacant']."</td>";
            echo "<td>".$course['descripcio_treball']."</td>";
            echo "<td>".$course['tipus_vacant']."</td>";
            echo "<td>".$course['empresa']."</td>";

        echo "</tr>";

  }
?>

</body>

</html>
