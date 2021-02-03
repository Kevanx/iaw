<?php
  function open_con(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "registredb";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Error en la connexió %s\n". $conn -> error);

    return $conn;
  }

  function close_con($conn){
    $conn -> close();
  }

?>
