<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require("conecta.php");

$result = $mysqli->query("SELECT * FROM `tb_usuario`
WHERE `usuario` = '$usuario' AND `senha`= '$senha'");

if ($result->num_rows > 0) {
  $_SESSION['usuario'] = $usuario;
  $_SESSION['senha'] = $senha;
  Header('location:cadastro.php');
} else {
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location: login.php');
}
