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
    <div class="container" id="form">
      <form class="col s12" method="post" action="login-func.php">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email" required>
            <label for="email">Email ou Usuário</label>
          </div>
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="senha" required>
            <label for="password">Senha</label>
          </div>
        </div>
        <button class="btn waves-effect waves-yellow conta" type="submit">LOGIN</button>
      </form>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>