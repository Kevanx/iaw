<html>
<body>
  <?php
  session_start();
  include 'connectdb.php';
  $conn = open_con();

 if (!$conn) {
    die("Error a la connexió " . mysqli_connect_error());
 }
 else{
   echo "S'ha connectat correctament";
 }
  $vacant = utf8_decode($_POST['vacant']);
  $descripcio_vacant = utf8_decode($_POST['descripcio_vacant']);
  $descripcio_treball = utf8_decode($_POST['descripcio_treball']);
  $tipus = utf8_decode($_POST['tipus']);
  $usuari = $_SESSION['empresa'];

  $sql = mysqli_query($conn,"SELECT empresas FROM usuaris WHERE usuari ='".$usuari."'");
  $result = $sql->fetch_array()[0] ?? '';
  if(!empty($sql) AND mysqli_num_rows($sql) > 0){
  $query = mysqli_query($conn,"INSERT INTO registrevacant(titol_vacant, descripcio_vacant, descripcio_treball, tipus_vacant, empresa)VALUES('".$vacant."', '".$descripcio_vacant."', '".$descripcio_treball."', '".$tipus."', '".$result."')");
echo "Se ha añadido una vacante";
header("Location: empresa.php");

}else{
    echo "Team is not valid!!!";
}

   ?>
</body>

</html>
