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
  <main id="cart">
   <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="img/produtos/1.jpg" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="img/produtos/1.2.jpg" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="img/produtos/1.3.jpg" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="img/produtos/1.4.jpg" width="100%">
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <div class="proximo"><i class="fas fa-chevron-right"></i></div>
    <div class="voltar"><i class="fas fa-chevron-left"></i></div>
  </div>
  <div class="col s12 m5">
    <div class="card-panel light">
      <p class="titulo">Gabinete NZXT Phantom 530</p>
      <p>A vista</p>
      <p class="preco">R$ 750, 00</p><div class="card-footer">
        <a class="waves-effect waves-red btn-small buy">Comprar</a>
        <a href="carrinho.php?idprod" class="waves-effect waves-yellow btn-small cart"><i class="fas fa-cart-plus"></i></a>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a class="active" href="#card1">Detalhes</a></li>
        <li class="tab"><a  href="#card2">Conteudo da caixa</a></li>
        <li class="tab"><a href="#card3">Envio</a></li>
      </ul>
    </div>
    <div class="card-content lighten-4">
      <div id="card1">Test 1</div>
      <div id="card2">Test 2</div>
      <div id="card3">Test 3</div>
    </div>
  </div>
  
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script>
  $(document).ready(function(){ 
    $('.tabs').tabs(); 
     var swiper = new Swiper('.swiper-container', {
      effect: 'cube',
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
      navigation: {
        nextEl: '.proximo',
        prevEl: '.voltar',
      },
    });
  });
</script>
</body>
</html>