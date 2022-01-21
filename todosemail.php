<!DOCTYPE html>
<html>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<head>
    </head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">

    <?php 

      

include "conexao.php";

$sql = "SELECT * FROM `cliente` WHERE 1";

$dados = mysqli_query($conexao, $sql);

?>


<body>

<div class="container">

  <div class="row">

    <h1>Pesquisar</h1>

    <table class="table table-hover">
      <thead>
        <tr>
          
          <th scope="col">Todos os email cadastrados</th>
         
        </tr>
      </thead>
      <tbody>

        <?php

while ($linha =  mysqli_fetch_assoc($dados) ) {
  
  $email = $linha['email'];
  

  echo "
    <tr>
          <th scope='row'>$email</th>
        
        </tr>";
      }
?>
      </tbody>
    </table> 

    <a class="btn btn-primary btn-lg" href="index.php" role="button">Voltar</a>


  </div>
  
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>  
</body>
</html>
