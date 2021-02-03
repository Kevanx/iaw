<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="post" action="eliminar.php">
    <div class="login">
      <div class="login-content">
      <div>
        <input type ="text" name="codigo" placeholder="Ingresa el id de registro a eliminar">
        <input type="submit" name="name" value="Eliminar">
      </div>

    </div>
    </form>
  </div>

</div><br>
<div>
    <table width="400" border="2" cellpadding="2" cellspacing='1'>
            <th> id_vacant</th>
            <th>titol_vacant</th>
            <th>descripcio_vacant</th>
            <th>descripcio_treball</th>
            <th>tipus_vacant</th>
            <th>empresa</th>
     </tr>
   </div>
</div>

      <?php
      session_start();
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
