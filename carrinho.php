<?php 
    session_start();
    include "banco.php";
    $id = $_GET['idprod'];
    $qtd = 1;
    $vt = 0;
    $email = $_SESSION['email'];

    $consultac = mysqli_query($con, "select * from carrinho where usuario = '$email' and idprod = $id");

    $existe = mysqli_num_rows($consultac);

    if($existe == 0){
      mysqli_query($con, "insert into carrinho (idprod, qtd, usuario) values ($id, $qtd, '$email')");
    }else{
      mysqli_query($con, "update carrinho set qtd = qtd+1 where idprod = $id and usuario = '$email'");
    }
    /*QBUSCA A QAUNTIDADE DE INTES NO CARRINHO E QUE ADICIONOU LÁ*/
    $email = $_SESSION['email'];
    $query = "select p.img, p.titulo, p.preco, c.qtd, c.idcarrinho, p.idprod from carrinho c, produto p where c.usuario = '$email' and c.idprod = p.idprod";
    $c = mysqli_query($con, $query);
    $total = mysqli_num_rows($c);
    ?>

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
  <!--<header><?php include "header-back.php" ?></header>-->
  <main>
    <?php 
    if(empty($_SESSION['email'])){
     ?>
     <div class="container">
       <a href="login.php" class="waves-effect waves-red btn" id="cart-login">Entre com a sua conta primeiro<i class="fas fa-user"></i></a>
     </div>
   <?php }else{ ?> 
    <div id="cart">
      <?php if($total == 0){ ?>
        <div id="nop">
          <h4 class="mb-5">Você Tem 0 Itens em seu Carrinho</h4>
          <a href="index.php" class="btn btn-block">QUE TAL IR AS COMPRAS?
            <span><i class="fas fa-shopping-bag"></i></span></a>
          </div>
        <?php }else{ ?>
          <table class="striped" id="tab-cart">
            <tbody>
              <tr>
                <?php 
                while($f = mysqli_fetch_array($c)){
                  $img = $f[0];
                  $titulo = $f[1];
                  $preco = $f[2];
                  $qtd = $f[3];
                  $iditem = $f[4];
                  $idprod = $f[5];
                  //$preco = number_format($preco, 2, ',','.');
                  $st = $preco * $qtd;
                  //$st = number_format($st, 2, ',','.');
                  $vt = $vt + $st;
                  ?>
                  <td><img src="img/produtos/<?php echo $f['img']; ?>"></td>
                  <td data-th="Nome:" id="item-table"><?php echo $f['titulo']; ?></td>
                  <td data-th="Qtd:" id="item-table">
                    <span id="table-text">
                      <!-- diminuir Quantidade -->
                      <a href="menoscar.php?idprod=<?php  echo $f['idprod']; ?>"> 
                        <i class="fas fa-minus-square text-danger"></i> 
                      </a>
                      <!-- input -->
                      <b class="bg-light" id="mais-menos"><?php echo $qtd ?></b> 
                      <!-- Aumentar Quantidade -->
                      <a href='carrinho.php?idprod=<?php  echo $f['idprod']; ?>'>
                        <i class="fas fa-plus-square text-success"></i>
                      </a>
                    </span>
                  </td>
                  <td data-th="Preço:" id="item-table"><span id="table-text">R$ <?php echo number_format($st, 2, ',','.'); ?></span></td>
                  <td data-th="Excluir:" id="item-table"><span id="table-text"><i class="fas fa-trash-alt"></i></span></td>
                </tr>
              </tbody>
            <?php } ?>
          </table>
          <hr>
          <div class="sub">
            <p>Total:</p> 
            <p>R$ 000.00</p>
          </div>
          <div class="actions center-align">
            <a href="" class="btn">Continuar Comprando</a>
            <a href="" class="btn">Finalizar Compra</a>
          </div>
        </div>
      <?php }} ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>