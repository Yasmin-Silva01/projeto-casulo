<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parceiros pelo Brasil</title>

  <!-- Inserindo tags meta -->
  <meta name="description" content="Site que mostra o Projeto Casulo pra Rua. Um saco de dormir voltado para população em situação de rua">
  <meta name="keywords" content="casulo, população em situação de rua, saco de dormir, ajuda população vulnerável">


  <!-- Inserindo Favicon -->
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">

    
  <!-- CSS externo -->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" href="css/parceiros.css">
</head>
<body>
  <?php  
    require 'includes/header.php';
  ?>


  <main>
    <article>
      <h1 class="titulo-parceiros">Casulos pelo Brasil</h1>
      <p class="casulos">
        Os casulos já chegaram em outras cidades <br>
         pelo Brasil. Replique essa ideia na sua cidade.
      </p>

      <a href="https://instagram.com/casuloprarua.curitiba?utm_medium=copy_link" target="_blank">
        <img class="casulo-curitiba1" src="imagens/curitiba casulo.png" alt="logo casulo-curitiba">
      </a>

      <span class="curitiba-parana">
         Curitiba / Paraná
      </span>
          
      <img class="casulo-curitiba2" src="imagens/curitiba2.png" alt="homem segurando o  saco de dormir (casulo)">

      <img  class="casulo-curitiba3" src="imagens/curitiba.png" alt="homem deitado no saco de dormir (casulo)">
      <hr>

      <a href="https://instagram.com/redenobem?utm_medium=copy_link" target="_blank">
        <img class="nobem" src="imagens/no bem logo cópia.png" alt="logo nobem">
     </a>

      <span class="Juiz-de-fora">
        Juíz de Fora / Minas Gerais
      </span>

      <img class="minas-gerais1" src="imagens/Minas Gerais1.png" alt="homem abrindo saco de dormir (casulo)">

      <img class="minas-gerais2" src="imagens/Minas Gerais2.png" alt="sacos de dormir dentro de um carro ">
      <hr>

      <a href="https://instagram.com/casuloprarua.brasilia?utm_medium=copy_link" target="_blank">
        <img class="casulo-brasilia1" src="imagens/brasilia.png" alt="logo casulo-brasilia">
      </a>

      <span class="brasilia">
        Brasília / Distrito Federal
      </span>

      <img class="brasilia2" src="imagens/copia-brasilia.png" alt="Mulher com o saco de dormir (casulo)">

      <img class="brasilia3" src="imagens/copia-brasilia2.png" alt="Uma pessoa dormindo no saco de dormir (casulo)">
    </article>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="js/menu.js"></script>
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/silde.js"></script>
</body>
</html>