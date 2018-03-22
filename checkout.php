<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<Meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>

	<div class="jumbotron">
		<div class="container">

	<h1>Ótima escolha!</h1>
	<p>Obrigada por comprar na Mirror Fashion!
	   Preencha seus dados para efetivar a compra.</p>

		</div>
	</div>
	<div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
	<h2 class="panel-title">Sua compra</h2>
		</div>
	<div class="panel-body">
	<dl>

		<img src="img/produtos/foto2-verde.png" alt="Fuzzy T-Shirt"
			class="img-thumbnail img-responsive"/>

		<dt>Produto</dt>
		<dd><?= $_POST['nome'] ?></dd>

		<dt>Preço</dt>
		<dd><?= $_POST['preco'] ?></dd>
		
		<dt>Cor</dt>
		<dd><?= $_POST['cor'] ?></dd>

		<dt>Tamanho</dt>
		<dd><?= $_POST['tamanho'] ?></dd>
	</dl>
	
	</div>
	</div>
	</div>
</body>
</html>