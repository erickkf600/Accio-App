<section class="slide-img">
  <div class="carousel carousel-slider">
    <span class="carousel-item"><img src="img/1.jpg"></span>
    <span class="carousel-item"><img src="img/2.jpg"></span>
    <span class="carousel-item"><img src="img/3.jpg"></span>
    <span class="carousel-item"><img src="img/4.jpg"></span>
  </div>
</section>
<h3 class="new">Novidades</h3>
<section class="itens">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php 
      $resultado = "select * from produto limit 6";
      $iten = mysqli_query($con, $resultado);
      while($f = mysqli_fetch_array($iten)){ 
        $preco = $f['preco'];
        $preco = number_format($preco, 2, ',','.');
        ?>
        <div class="swiper-slide">
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
          </a> 
              <div class="card-footer">
                <a class="waves-effect waves-red btn-small">Comprar</a>
                <a href="carrinho.php?idprod=<?php  echo $f['idprod']; ?>" class="waves-effect waves-yellow btn-small cart"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</section>