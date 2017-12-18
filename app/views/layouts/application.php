<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
	<title>Wooby</title>

	<!-- Bootstrap -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/wooby.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="/assets/js/semantic.min.js"></script>

	<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
	<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body>
		<?= $str ?>
		
		<script>
			$('.ui.basic.modal').modal('show');
		</script>
		<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
	</html>