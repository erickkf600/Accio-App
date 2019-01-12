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
   <div id="cart">
    <table class="striped" id="tab-cart">
      <tbody>
        <tr>
          <td><img src="img/produtos/1.jpg"></td>
          <td data-th="Nome:" id="item-table"><span id="table-text">Gabinete NZXT Phantom 530</span></td>
          <td data-th="Qtd:" id="item-table">
            <span id="table-text" style="margin-top: -15px">
                <select>
                  <option value="" disabled selected>Disponível</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </span>
          </td>
          <td data-th="Preço:" id="item-table"><span id="table-text">R$ 000.00</span></td>
          <td data-th="Excluir:" id="item-table"><span id="table-text"><i class="fas fa-trash-alt"></i></span></td>
        </tr>
      </tbody>
    </table>
    <hr>
    <div class="sub">
      <p>SubTotal:</p> 
      <p>R$ 000.00</p>
    </div>
    <div class="sub" style="margin-top: -40px">
      <p>Total:</p> 
      <p>R$ 000.00</p>
    </div>
    <div class="actions center-align">
      <a href="" class="btn">Continuar Comprando</a>
      <a href="" class="btn">Finalizar Compra</a>
    </div>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>