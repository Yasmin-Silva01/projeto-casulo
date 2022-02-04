<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem somos</title>

    <!-- Inserindo tags meta -->
    <meta name="description" content="Site que mostra o Projeto Casulo pra Rua. Um saco de dormir voltado para população em situação de rua">
    <meta name="keywords" content="casulo, população em situação de rua, saco de dormir, ajuda população vulnerável">


    <!-- Inserindo Favicon -->
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">

    
    <!-- CSS externo -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/quem-somos.css">
    
</head>
<body>

<?php  
  require 'includes/header.php';
?>

<main>
  <article class="idealizadoras">
        <h1>Quem somos</h1>
        <p class="casulo-pra-rua">O Casulo Pra Rua é um projeto criado pela estilista Bibi Fragelli, e pela sua sócia, a roterista, Patrícia Curti.</p>
        <br>
        <p class="casulo-iniciativa">A iniciativa surgiu, mesmo antes da pandemia, de aliviar as noites frias de São Paulo, para a população de rua.</p>


        <figure>
            <img class="mulheres" src="imagens/idealizadoras.jpg" alt="Idealizadoras do Casulo para Rua - Bibi Fragelli e Patrícia Curti">
            <figcaption>Idealizadoras Patrícia Curti e Bibi Fragelli</figcaption>
        </figure>

        <p class="projeto-casulo">
            O projeto nasceu no dia 16 de abril de 2021 e tem feito muito sucesso. <br>
            A intenção é que o Casulo seja replicado e multiplicado por todo Brasil. 
        </p>  

        <figure>
            <img class="casulos" src="imagens/trio casulo.png" alt="Três ilustrações de casulos em tamanhos diferentes">
            
        </figure>

        <p class="casulo-focos">
            O Casulo Pra Rua tem dois focos: beneficiar diretamente as pessoas em situação de rua e ao mesmo tempo,<br> 
            dar trabalho - com remuneração justa - para costureiras desempregadas ou de baixa renda.
        </p>  

        <div class="frase">
            <h2> "Eu estava na minha cama quentinha nas noites de inverno, lembrando das pessoas que dormiam nas ruas."
            <em>Bibi Fragelli</em>
            </h2>

        </div>

  </article>
</main>

<?php include 'includes/footer.php'; ?>

<script src="js/menu.js"></script>
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/silde.js"></script>
</body>
</html>