<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
  <meta name="robots" content="noindex">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="icon.png">
  <title>ACCIO</title>
</head>
<body id="body">
  <header><?php include "header-back.php" ?></header>
  <main>
    <ul class="tabs tabs-fixed-width tab-demo z-depth-1" id="tabs">
      <li class="tab"><a class="active" href="#test1">Dados</a></li>
      <li class="tab"><a href="#test2">Contato</a></li>
      <li class="tab"><a href="#test3">Usuário</a></li>
    </ul>
    <div class="container">
      <form  method="post" action="login-func.php">
        <div id="test1" class="col s12">

          <div class="input-field">
            <input id="name" type="text" class="validate" name="nome" required>
            <label for="name">Nome Completo</label>
          </div>

          <div class="input-field">
            <input id="number" type="number" class="validate" name="telefone" required>
            <label for="number">Telefone</label>
          </div>

          <div class="input-field">
            <input type="text" class="datepicker" name="nascimento" required>
            <label for="number">Nascimento</label>
          </div>

          <div class="input-field">
            <input id="number" type="number" class="validate" name="cpf" required>
            <label for="number">CPF</label>
          </div>
        </div>
        <div id="test2" class="col s12">

          <div class="input-field">
            <input id="number" type="number" class="validate" name="cep" required>
            <label for="cep">CEP</label>
          </div>

          <div class="input-field col s12">
            <input id="endereco" type="text" class="validate" name="endereco" required>
            <label for="endereco">Endereço</label>
          </div>

          <div class="input-field col s12">
            <input id="number" type="number" class="validate" name="numero" required>
            <label for="numero">Número</label>
          </div>

          <div class="input-field">
            <input id="text" type="text" class="validate" name="cidade" required>
            <label for="cidade">Cidade</label>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="text" type="text" class="validate" name="bairro" required>
              <label for="bairro">Bairro</label>
            </div>

            <div class="input-field col s3">
              <input id="text" type="text" class="validate" name="estado" required>
              <label for="estado">Estado</label>
            </div>
          </div>
        </div>
        <div id="test3" class="col s12">

          <div class="input-field">
            <input id="email" type="email" class="validate" name="email" required>
            <label for="email">Email</label>
          </div>

          <div class="input-field">
            <input id="number" type="number" class="validate" name="telefone" required>
            <label for="number">Usuário</label>
          </div>

          <div class="input-field">
            <input id="number" type="number" class="validate" name="cpf" required>
            <label for="number">CPF</label>
            <button class="btn waves-effect waves-yellow cadastrar" type="submit">CADASTAR-SE</button>
          </div>
        </div>
      </form>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>