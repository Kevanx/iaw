<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <img src="logomvm_www_JPG.jpg" alt="Italian Trulli" height=200px>
    <h1>
      <header>Institut Manuel Vázquez Montalbán</header>
    </h1>
  </div>
  <form method="post" action="modificar.php">
    <div class="login">
      <div class="login-content">
        <div>
          <label for="codigo">codigo:</label><br>
          <input type="text" name="codigo" placeholder="Ingrese id a modificar"><br><br>
        </div>
      <div>
        <label for="vacant">vacante:</label><br>
        <input type="text" name="titol_vacant" placeholder="Ingrese nuevo titulo"><br><br>
      </div>
      <div>
        <label for="descripcio_vacant">descripcion vacante:</label><br>
        <input type="text" name="descripcio_vacant" placeholder="Ingrese nueva descripcion de vacante"><br><br>
      </div>
      <div>
        <label for="descripcio_treball">descripcion trabajo:</label><br>
        <input type="text" name="descripcio_treball" placeholder="Ingrese nueva descripcion de trabajo"><br><br>
      </div>
      <div>
        <label for="tipus">tipus:</label><br>
        <select name="tipus">

        <option>dual</option>

        <option>fct</option>

        <option>laboral</option>

        </select>
      </div>

      <input type="submit" name="name" value="Modificar">
    </div><br>


  </form>
    <table width="400" border="2" cellpadding="2" cellspacing='1'>
            <th>id_vacant</th>
            <th>titol_vacant</th>
            <th>descripcio_vacant</th>
            <th>descripcio_treball</th>
            <th>tipus_vacant</th>
            <th>empresa</th>
     </tr>
   </div>
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
