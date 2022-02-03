
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casulo pra rua</title>

    <!-- Inserindo tags meta -->
    <meta name="description" content="Site que mostra o Projeto Casulo pra Rua. Um saco de dormir voltado para população em situação de rua">
    <meta name="keywords" content="casulo, população em situação de rua, saco de dormir, ajuda população vulnerável">


    <!-- Inserindo Favicon -->
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">

    
    <!-- CSS externo -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/slide.css">
</head>
<body>

 
   
    <?php include 'includes/header.php'; ?>
 
    <main>
       
        <article class="destaque">
            <div class="texto1">
              <h1>O que é o CASULO?</h1>
              <p>
                  É um saco de dormir quente, impermeável, leve e fácil de carregar.
                  Voltado para ajudar a população em situação de rua.
              </p>
            </div>
           
            <div class="casulo">
              
                <div class="slideshow-container">

                    <div class="mySlides fade">
                       <img src="imagens/casulo01.PNG" class="imagem-slider">
                    </div>
                  
                    <div class="mySlides fade">
                      <img src="imagens/casu04.png" class="imagem-slider">
                    </div>
                  
                    <div class="mySlides fade">
                      <img src="imagens/casulo3.png" class="imagem-slider">
                      
                    </div>
                  
                    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->
                    <!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
               </div>
               <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
          </div>
        </article>

        <article class="praticidade">
            <div>
                <h2>PRATICIDADE</h2>
                <p>
                    O desenvolvimento do Casulo foi pensado na necessidade daqueles que moram na rua.
                </p> <br>
                <p>
                    Passam frio, sofrem com a umidade e falta de segurança. O saco de dormir tem um espaço falso para travesseiros 
                    onde é possível guardar pertences com mais cuidado.
                </p>
           </div>
            <figure>
                <img  class="homem-praticidade" src="imagens/copia-casu3.png" alt="homem com o saco de dormir">
            </figure>
        </article>

        <article class="historia">
            <h2>Casulo é</h2>
            <div class="container-casulo">
                  
                <div class="container-filho">
                    <img src="imagens/leve1.png" alt="">
                </div>

                <div class="container-filho">
                    <img src="imagens/quente2.png" alt="">
                </div>

                <div class="container-filho">
                    <img src="imagens/impermeavel3.png" alt="">
                </div>

                <div class="container-filho">
                    <img src="imagens/ajusta-se4.png" alt="">
                </div>
                  
                <div class="container-filho">
                    <img class="baixo-custo" src="imagens/baixo-custo5.png" alt="">
                </div>
            </div>
        </article>
    </main>

    <?php include 'includes/footer.php'; ?>

  <script src="js/menu.js"></script>
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/silde.js"></script>
</body>
</html>