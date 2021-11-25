<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <style>
    .menu #navbar {
      text-align: center;
    }
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
              <li><a href="sobre.php">Sobre Nós</a></li>
              <li><a href="cardapio.php">Cardápio</a></li>
              <li><a href="contato.php">Contato</a></li>
              <li><a href="promocoes.php">Promoções</a></li>
            </ul>

          </nav>
        </div>
      </header>

      <section id="section-login">

        <div id="login">
          <h2>Login</h2>
          <form action="ope.php" method="POST">
            <label for="usuario">Usuário: </label> <br>
            <input type="text" name="usuario" size="25" maxlength="30" placeholder="Informe o Nome de Usuário" autofocus required>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" maxlength="20" placeholder="Digite a senha" required>
            <input type="submit" value="Entrar" name="botao" id="sub">
          </form>
        </div>

      </section>

    </main>
  </div>


</body>