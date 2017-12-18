<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Wooby</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/wooby.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="/js/semantic.min.js"></script>

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body class="login_body">
  
<nav class="navbar navbar-default defaultw">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/"><img src="/static/logo.png" class="logo"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right navw">
        <li class="login"><a href="cadastrar.php">Cadastrar</a></li></ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="align-login">
<div class="loginfs">
<form class="ui form">
  <div class="field">
    <label>Email</label>
    <input type="text" name="email" placeholder="E-mail">
  </div>
  <div class="field">
    <label>Senha</label>
    <input type="password" name="senha" placeholder="Senha">
  </div>
  <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" tabindex="0" class="hidden">
      <label>Concordo com os termos de usos</label>
    </div>
  </div>
  <button class="ui button" type="submit">Login</button>
</form>
</div>
</div>

<style>
.background{
	background-image: url(http://woobyanimes.com/static/backgronds/1.png);
}
</style>

<div class="background"></div>

</body>
</html>