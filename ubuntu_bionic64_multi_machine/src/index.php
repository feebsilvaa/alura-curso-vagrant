<?php
  echo "Testando conexao <br /> <br />";
  $servername = "192.168.0.58";
  $username = "phpuser";
  $password = "pass";

  // create connection
  $conn = new mysqli($servername, $username, $password);

  // check connection
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->$connect_error);
  }

  echo "Conectado com sucesso";
?>