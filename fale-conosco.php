<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fale Conosco - Casulo pra Rua</title>

<!-- Inserindo Favicon -->
<link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">

<!-- Inserindo tags meta -->
<meta name="description" content="Entre em contato com a nossa equipe.">
<meta name="keywords" content="contato">

<!-- CSS externo -->
<link rel="stylesheet" href="css/estilos.css">

</head>
<body>
  <?php  
     require 'includes/header.php';
   ?>

  <!-- conteúdo -->
  <main>
        <article class="fale">
            <h2>Fale Conosco</h2>
            <p class = "contato" >Entre em contato com o Casulo pra Rua. Caso queira mais informações do nosso trabalho ou tem alguma dúvida, preencha o cadastro abaixo que entraremos em contato.</p>

 <!-- iniciando o formulário -->
 <form action="https://formspree.io/f/xnqwpzoq" method="post" id="my-form">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" placeholder="Digite apenas números, incluindo o DDD">
        </div>

   
        <div>
            <label for="assunto">Assunto:</label>
            <select name="assunto" id="assunto">
            <option></option>
            <option>Dúvidas</option>
            <option>Elogios</option>
            <option>Reclamações</option>
            <option>Outros</option>
            </select>
        </div>

        <div>
            <label for="mensagem">Mensagem:
            <span id="maximo"> (restam <b id="caracteres">100</b> caracteres)</span>
            </label><br>
            <textarea name="mensagem" id="mensagem" cols="20" rows="5" maxlength="100"></textarea>
            </div>

        <button type="submit" id="my-form-button">Enviar dados</button>
            <p id="my-form-status"></p>
            </form>
        </article> 
         
 </main>  
 
<?php include 'includes/footer.php'; ?>

<script src="js/menu.js"></script>
<script src="js/jquery-3.1.0.min.js"></script>


<!-- Usando o Vanilla Masker -->
<script src="js/vanilla-masker.min.js"></script>


<!-- Mascarando o campo de telefone. Máscara dinâmica -->
<script>

function inputHandler(masks, max, event) {
            var c = event.target;
            var v = c.value.replace(/\D/g, '');
            var m = c.value.length > max ? 1 : 0;
            VMasker(c).unMask();
            VMasker(c).maskPattern(masks[m]);
            c.value = VMasker.toPattern(v, masks[m]);
        }

            var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
            var tel = document.querySelector('#telefone');
            VMasker(tel).maskPattern(telMask[0]);
            tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

</script>

 <!-- Contador de caracteres do campo de mensagem do formulário -->
 <script>

// selecionando os elementos que serão utilizados
const spanMaximo = $("#maximo");
const bCaracteres = $("#caracteres");
const textMensagem = $("#mensagem");

// determinando a quantidade de caracteres
let quantidade = 100;

// Ouvinte de evento
textMensagem.on("input", function(){

    // capturando o que for digitado
    let conteudo = textMensagem.val();
    
    // criando a contagem regressiva
    let contagem = quantidade - conteudo.length;
    // console.log(contagem);


    // Exibindo o número no HTML
    bCaracteres.text(contagem);

    if (contagem == 0) {
        spanMaximo.css('color', 'red');
        spanMaximo.text("Limite de caracteres alcançado");
    } else {
        spanMaximo.css('color', 'black');
        spanMaximo.html("(restam <b id='caracteres'>" +contagem+ "</b> caracteres)");
    }

});
</script>

<!-- Formspree - script para envio do formulário -->
<script>
var form = document.getElementById("my-form");

async function handleSubmit(event) {
event.preventDefault();
var status = document.getElementById("my-form-status");
var data = new FormData(event.target);
fetch(event.target.action, {
method: form.method,
body: data,
headers: {
    'Accept': 'application/json'
}
}).then(response => {
status.innerHTML = "Mensagem enviada com sucesso, obrigado!";
form.reset()
}).catch(error => {
status.innerHTML = "Oops! Encontramos um problema, revise as informações e envie novamente."
});
}
form.addEventListener("submit", handleSubmit)
</script>

</body>
</html>