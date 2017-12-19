<nav class="navbar navbar-default defaultw">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" class="logo"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right navw">
        <li class="login"><a href="/">Login</a></li></ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="align-login form">
<div class="loginfs">
<form method='post' action='/registrations/create'>
  <div class="field">
    <label>Email</label>
    <input class="uifo" type="email" name="[User][email]" placeholder="wooby@exemplo.com">
  </div>
  <div class="field">
    <label>Senha</label>
    <input class="uifo" type="password" name="[User][password]" placeholder="Senha">
  </div>
  <div class="field">
    <label>Nome de usuario</label>
    <input class="uifo" type="text" name="[User][usuario]" placeholder="Exemplo">
  </div>
  <div class="field">
    <label>Nome de quem vai usar a conta</label>
    <input class="uifo" type="text" name="[User][perfil]" placeholder="Exemplo">
  </div>
  <button class="cadastrar" type="submit">Registrar</button>
</form>
</div>
</div>

<style>
.background{
	background-image: url(http://www.mulierchile.com/anime-wallpaper-background/anime-wallpaper-background-004.jpg);
}
</style>

<div class="background"></div>
