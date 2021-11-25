<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="../css/style.css">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <style>

  </style>
</head>

<body>
  <div class="container">
    <main>

      <header>
        <div class="menu">
          <nav id="navbar">
            <ul>
              <li><a href="../index.php">HOME</a></li>
            </ul>

          </nav>
        </div>
      </header>

      <section id="section-cliente">
        <h1>CADASTRO DE CLIENTES</h1>
        <table id="table-adiciona">
          <tr>
            <td>CPF: </td>
            <td><input type="text" id="cpfcli" /></td>
            <td>Nome: </td>
            <td><input type="text" id="nomecli" /></td>
            <td><button id="adiciona">ADICIONAR</button></td>
          </tr>
        </table>

        <table cellspacing="0" id="table-mostra">
          <tr>
            <th>CPF</th>
            <th>NOME</th>
            <th>Ação</th>
            <?php
            require("conecta.php");
            $busca = $mysqli->query("select * from tb_clientes");
            while ($tb_clientes = $busca->fetch_assoc()) {
              echo '<tr>
              <td>' . $tb_clientes["cpfcli"] . '</td>
              <td>' . $tb_clientes["nomecli"] . '</td>	
              <td> <a href="editar.php?id='  . $tb_clientes["idcli"] . '">editar</a>
              <a class="acao_excluir" bancoid="'
                . $tb_clientes["idcli"] . '">excluir</a></td>';
            }
            ?>
          </tr>

        </table>
        <br><br><br>

        <h1>CADASTROS DE PRODUTOS</h1>
        <table id="table-adiciona">
          <tr>
            <td>Produto: </td>
            <td><input type="text" id="produto" /></td>
            <td>Valor: </td>
            <td><input type="text" id="preco" /></td>
            <td>Cor: </td>
            <td><input type="text" id="cor" size="15"></td>
            <td><button id="adiciona-produto">ADICIONAR</button></td>
          </tr>
        </table>

        <table cellspacing="0" id="table-mostra">
          <tr>
            <th>Produto</th>
            <th>Valor</th>
            <th>Cor</th>
            <th>Ação</th>
            <?php
            require("conecta.php");
            $busca = $mysqli->query("select * from tb_produtos");
            while ($tb_produtos = $busca->fetch_assoc()) {
              echo '<tr>
              <td>' . $tb_produtos["produto"] . '</td>
              <td>' . $tb_produtos["preco"] . '</td>	
              <td>' . $tb_produtos["cor"] . '</td>
              <td> <a href="editar_produto.php?id='  . $tb_produtos["idpro"] . '">editar</a>
              <a class="acao_excluir" bancoid="'
                . $tb_produtos["idpro"] . '">excluir</a></td>';
            }
            ?>
          </tr>

        </table>
      </section>




    </main>
  </div>

  <script type="text/javascript" src="../js/eventos.js"></script>
</body>