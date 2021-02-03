
<html>

<head>
  <title>Institut MVM</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="header">

<h1>Vacantes</h1>

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
<?php
include 'connectdb.php';
$conn = open_con();
$records = mysqli_query($conn,"SELECT * FROM registrevacant WHERE tipus_vacant = 'laboral'");


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
