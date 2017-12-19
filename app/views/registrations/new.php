<div class="align-login form">
<div class="loginfs">
<h1>Cadastrar</h1>
<form method='post' action='/registrations/create'>
  <div class="field">
    <label>Email</label>
    <input class="uifo" type="email" name="User[email]" placeholder="wooby@exemplo.com">
  </div>
  <div class="field">
    <label>Senha</label>
    <input class="uifo" type="password" name="User[password]" placeholder="Senha">
  </div>
  <div class="field">
    <label>Nome</label>
    <input class="uifo" type="text" name="User[first_name]" placeholder="Alexandre">
  </div>
  <div class="field">
    <label>Sobrenome</label>
    <input class="uifo" type="text" name="User[last_name]" placeholder="Silva">
  </div>
  <div class="field">
    <label>Nome de usuario</label>
    <input class="uifo" type="text" name="User[username]" placeholder="kaway">
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

<div class="modal" tabindex="-1" role="dialog" id='login_modal'>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Login
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" class="form-control" id="senha">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Login</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>


<div class="background"></div>
