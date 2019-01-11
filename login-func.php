<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="robots" content="noindex">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>ACCIO</title>
</head>
<body>
  <?php 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    include "banco.php";
    $query = "select * from login where email = '$email' and senha = '$senha' limit 1";

    $consulta = mysqli_query($con, $query);

    $total = mysqli_num_rows($consulta);
    if($total == 0){
      ?>  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script>
        var toastHTML = '<span id="erro">USÚARIO NÃO ENCONTRADO <a href="login.php" class="btn-flat toast-action">OK</a></span>';
        M.toast({html: toastHTML, displayLength: Infinity});
      </script>
      <?php }else{
        session_start();
        $_SESSION['email'] = $email;
        header("Location: index.php");
      }
  ?>
</body>
</html>
