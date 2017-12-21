<div class="container">
	<h1>backend/users/index</h1>


	<table class="table table-bordered">
		<tr><th>ID</th><th>Email</th><th>Username</th><th colspan='3'>Açoes</th></tr>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?= $user->id ?></td>
				<td><?= $user->email ?></td>
				<td><?= $user->username ?></td>
				<td><a href="/backend/users/<?= $user->id ?>">Ver</a></td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>