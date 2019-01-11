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
      <form  method="post" action="cad-func.php">
        <div id="test1" class="col s12">

          <div class="input-field">
            <input id="name" type="text" name="nome" required>
            <label for="name">Nome Completo</label>
          </div>

          <div class="input-field">
            <input id="telefone" type="number"  name="telefone" required>
            <label for="telefone">Telefone</label>
          </div>

          <div class="input-field">
            <input type="text" class="datepicker" name="nascimento" required>
            <label for="nascimento">Nascimento</label>
          </div>

          <div class="input-field">
            <input id="cpf" type="number" name="cpf" required>
            <label for="cpf">CPF</label>
          </div>
        </div>

        <div id="test2" class="col s12">

          <div class="input-field">
            <input id="cep" type="number" name="cep" required>
            <label for="cep">CEP</label>
          </div>

          <div class="input-field">
            <input id="endereco" type="text" name="endereco" required>
            <label for="endereco">Endereço</label>
          </div>

          <div class="input-field">
            <input id="numero" type="number" name="numero" required>
            <label for="numero">Número</label>
          </div>

          <div class="input-field">
            <input id="cidade" type="text" name="cidade" required>
            <label for="cidade">Cidade</label>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="bairro" type="text" name="bairro" required>
              <label for="bairro">Bairro</label>
            </div>

            <div class="input-field col s3">
              <input id="estado" type="text" name="estado" required>
              <label for="estado">Estado</label>
            </div>
          </div>
        </div>
        <div id="test3" class="col s12">

          <div class="input-field">
            <input id="email" type="email" name="email" required>
            <label for="email">Email</label>
          </div>

          <div class="input-field">
            <input id="usuario" type="text" name="usuario" required>
            <label for="usuario">Usuário</label>
          </div>

          <div class="input-field">
            <input id="password" type="password" name="senha" required>
            <label for="password">Senha</label>
            <button class="btn waves-effect waves-yellow cadastrar modal-trigger" type="submit" data-target="modal1">CADASTRE-SE</button>
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