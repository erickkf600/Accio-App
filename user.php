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
<body>
  <header><?php include "header-back.php" ?></header>
  <main>
    <div class="card"> 
      <div class="card-content lighten-4" id="user-img">
        <div id="image">
          <div class="background">
            <img src="img/fundo2.jpg" width="100%">
          </div>
          <div class="content">
            <img class="circle" src="img/user.png" width="30%">
            <div> 
              <a class="waves-effect waves-light btn modal-trigger red" href="#modal1">
                <i class="fas fa-pencil-alt"></i>
              </a>
            </div>
          </div>
          <div class="info">
            <p>Nome: <span>nome</span></p>
            <p>Email: <span>email</span></p>
            <p>CPF: <span>cpf</span></p>
          </div>        
        </div>

        <div id="informacoes" id="form">
          <div class="row">
            <form class="col s12" method="post" action="atualizar.php">
              <div class="input-field col s12">
                <input id="name" type="text" name="nome" value="Nome">
                <label for="name">Nome</label>
              </div>
              <div class="input-field col s12">
                <input id="usuario" type="text" name="usuario" value="Usuario">
                <label for="usuario">Usuário</label>
              </div>
              <div class="input-field col s12">
                <input id="email" type="email" name="email" value="Email">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" value="senha">
                <label for="password">Senha</label>
                <button class="btn waves-effect waves-yellow conta" type="submit">ATUALIZAR</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="card-tabs" id="tab-item">
        <ul class="tabs tabs-fixed-width">
          <li class="tab"><a href="#image">Usuário</a></li>
          <li class="tab"><a href="#informacoes">Informações</a></li>
        </ul>
      </div>
    </div>
  </main>
  <!-- MODAL -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h5>Adicione uma foto</h5>
      <form action="upload.php">
        <div class="file-field input-field">
          <div class="btn">
            <span>Imagem</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="modal-close waves-effect waves-green btn-flat">UPLOAD</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>