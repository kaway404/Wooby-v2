<code>Backend/Users/Show</code>
<h1><?= $user->first_name ?></h1>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Dados do usuario</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><?= $user->first_name ?></li>
						<li class="list-group-item"><?= $user->last_name ?></li>
						<li class="list-group-item"><?= $user->created_at->format('d-m-Y') ?></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Açoes</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><button>Atualizar Dados</button></li>
						<li class="list-group-item"><button>Bloquear</button></li>
						<li class="list-group-item"><button>Enviar email</button></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

