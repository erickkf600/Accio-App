<nav class="z-depth-2">
  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view" id="user">
        <?php 
        if(empty($_SESSION['email'])){?>
          <div class="background">
            <img src="img/fundo2.jpg" width="100%">
          </div>
          <h1>ACCIO</h1>
          <p>Buscou? Achou.</p>
          <div class="buttons">
            <a href="login.php" class="waves-effect waves-red btn" style="margin-bottom: 1rem">Login<i class="fas fa-user"></i></a>
            <a href="cadastro.php" class="waves-effect waves-yellow btn" id="cad">Cadastre-se<i class="fas fa-user-plus"></i></a>
          </div>
        <?php }else{ 
          while($f = mysqli_fetch_assoc($consulta)){
            $usuario = $f['usuario'];
          ?>
          <div class="background">
            <img src="img/fundo2.jpg" width="100%">
          </div>
          <a href="#"><img class="circle" src="img/user.png"></a>
          <a href="#"><span class="white-text name"><?php echo $usuario ?></span></a> 
        <?php }} ?>
      </div>
    </li>
    <li id="categorias">Categorias</li>
    <li id="home"><a href="#">Home</a></li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion menus">
        <li>
          <a class="collapsible-header item">Informática</a>
          <div class="collapsible-body" id="sub-item">
            <ul>
              <li><a href="">Hardwere</a></li>
              <li><a href="">Periféricos</a></li>
              <li><a href="">Computadores</a></li>
              <li><a href="">Notebooks</a></li>
              <li><a href="">Acessórios</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a class="collapsible-header item">Eletrônicos</a>
          <div class="collapsible-body" id="sub-item">
            <ul>
              <li><a href="">Smartphones</a></li>
              <li><a href="">Smartwatchs</a></li>
              <li><a href="">Drones</a></li>
              <li><a href="">Componentes</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a class="collapsible-header item">Games</a>
          <div class="collapsible-body" id="sub-item">
            <ul>
              <li><a href="">Console</a></li>
              <li><a href="">Jogos</a></li>
              <li><a href="">Acessórios</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="collapsible-header item">Leitura</a>
          <div class="collapsible-body" id="sub-item">
            <ul>
              <li><a href="">HQs</a></li>
              <li><a href="">Mangás</a></li>
              <li><a href="">Livros</a></li>
              <li><a href="">E-books</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="collapsible-header item">Vestuário</a>
          <div class="collapsible-body" id="sub-item">
            <ul>
              <li><a href="">Masculino</a></li>
              <li><a href="">Feminino</a></li>
              <li><a href="">Calçados</a></li>
              <li><a href="">Acessórios</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <?php if(isset($_SESSION['email'])){?> 
    <li id="home"><a href="sair.php">SAIR</a></li>
  <?php } ?>
    <li><p class="footer">Copyright © ACCIO - 2018. All right reserved.</p></li>    
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="fas fa-bars"></i></a>
  <ul class="navbar">
    <li><img src="logo.png"></li>
    <div class="icons">
      <div class="botao">
        <button class="pesq-icon"></button>
      </div>
      <div class="botao">
        <a href="">
          <button class="carrinho"></button>
        </a>
      </div>
    </div>
  </ul>
  <form action="" class="search-box">
    <input type="text" class="text search-input" placeholder="Digite Aqui para Pesquisar..." />
  </form>
</nav>