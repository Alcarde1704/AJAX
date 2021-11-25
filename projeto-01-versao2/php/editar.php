<?php
require("conecta.php");
$id_cliente = $_GET["id"];
$busca = $mysqli->query("select * from tb_clientes where idcli='$id_cliente'");
$tb_clientes = $busca->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <title>Editar</title>
</head>

<body>

  <div class="container">
    <main>
      <header>
        <div class="menu">
          <nav id="navbar">
            <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="sobre.php">Sobre Nós</a></li>
              <li><a href="cardapio.php">Cardápio</a></li>
              <li><a href="contato.php">Contato</a></li>
              <li><a href="promocoes.php">Promoções</a></li>
            </ul>

          </nav>
        </div>
      </header>

      <section id="section-edita">
        <h1>Editar</h1>
        <table>
          <tr>
            <td><input type="text" id="cpfcli" value="<?php echo $tb_clientes["cpfcli"] ?>"></td>
            <td><input type="text" id="nomecli" value="<?php echo $tb_clientes["nomecli"] ?>"></td>
            <td><button id="salvar">SALVAR</button></td>
          </tr>
        </table>
        <input type="hidden" id="idcli" value="<?php echo $id_cliente ?>">
      </section>

    </main>
  </div>
</body>

<script type="text/javascript" src="../js/eventos.js"></script>

</html>