<section>
  <div class="container">
    <h3 class="new">Melhores Ofertas</h3>
    <div class="row" id="linha">
      <?php 
        $resultado = "select * from produto where idprod > 6  limit 10";
        $iten = mysqli_query($con, $resultado);
        while($f = mysqli_fetch_array($iten)){ 
          $preco = $f['preco'];
          $preco = number_format($preco, 2, ',','.');
      ?>
        <div class="col s6 m6 l4 xl3">
          <a href="product-page.php?id=<?php  echo $f['idprod']; ?>">
            <div class="card">
              <div class="card-image">
                <img src="img/produtos/<?php echo $f['img']; ?>">
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="far fa-heart"></i></a>
              </div>
              <div class="card-content">
                <p class="titulo"><?php echo $f['titulo']; ?></p>
                <p class="preco">R$ <?php echo $preco ?></p>
              </div>

              <div class="card-footer">
                <a class="waves-effect waves-red btn-small buy">Comprar</a>
                <a href="carrinho.php?idprod=<?php  echo $f['idprod']; ?>" class="waves-effect waves-yellow btn-small cart"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
      </div>
    </div>
  </section>