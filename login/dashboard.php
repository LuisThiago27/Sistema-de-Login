<?php
  
  include('protect.php');
  
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sistema de Login</title>
  </head>
  <body>
      
        <?php
          print "Olá, ".$_SESSION['nome'];
          print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        ?>

  </body>
</html>
