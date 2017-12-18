<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Wooby</title>

    <!-- Bootstrap -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
	 <link href="public/assets/css/wooby.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="/public/assets/css/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="public/assets/js/semantic.min.js"></script>

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
  <div class="overlay"></div>
  
<nav class="navbar navbar-default defaultw">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="public/assets/img/logo.png" class="logo"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right navw">
        <li class="login" id="login"><a>Login</a></li></ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- /.Default apresentation -->
<div class="jumbotron homec">
<center>
  <h1>Comece seu mês gratuito.</h1>
   <p>Assista a seus animes favoritos agora no Wooby.</p>
  <p><a class="btn btn-primary btn-lg re" href="cadastrar.php" role="button">CRIAR CONTA GRÁTIS</a></p>
  </center>
</div>


<div class="jumbotron seja">
<center>
  <h1>Seja assinante um Wooby quando quiser.</h1>
  <p>Continue o vídeo de onde parou.</p>
</center>
</div>



<!-- /.Default elogio -->
<div class="sejaa">

<center>
<img src="http://www.animexis.com.br/wp-content/uploads/2015/07/aang2.jpg" class="avatar" />
<h1>Veja seus animes favoritos!</h1>
<p>Eu experimentei um mês grátis, eu gostei muito e vou comprar agora!</h1>
</center>

</div>


<footer>

</footer>

<div class="ui modal" id="modal" style="position: fixed; top: 40px; height: 430px;">
  <i class="close icon"></i>
  <div class="header">
    Login
  </div>
  <div class="image content">
    <div class="ui medium image">
      <img src="http://www.animexis.com.br/wp-content/uploads/2015/07/aang2.jpg">
    </div>
    <div class="description" style="width: 100% !important;">
      <div class="ui header">Login.</div>
     <form class="ui form">
  <div class="field">
    <label>Email</label>
    <input type="text" name="email" placeholder="E-mail">
  </div>
  <div class="field">
    <label>Senha</label>
    <input type="password" name="senha" placeholder="Senha">
  </div>

  <button class="ui button" type="submit">Login</button>
</form>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button" id="nope">
      Sair
    </div>
  </div>
</div>


<script>
var loginb = document.getElementById('modal');
document.getElementById("login").onclick = function() {animacaomenupos()};
document.getElementById("modal").onclick = function() {animacaomenupos()};
document.getElementById("nope").onclick = function() {animasair()};
function animacaomenupos(){
$("#modal").fadeIn(600);
}
function animasair(){
$("#modal").fadeOut(600);
}
</script>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>