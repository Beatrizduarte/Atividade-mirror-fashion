<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<Meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap-flatly.css"/>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Mirror Fashion</a>
			<button class="navbar-toggle" type="button"
			data-target=".navbar-collapse" data-toggle="collapse">
			<span class="glyphicon glyphicon-align-justify"></span>
			</button>
		</div>
		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Perguntas Frequentes</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
		</ul>
		<style>
			.navbar{
				margin:0;
			}
			body{
				padding-top: 70px;
			}
		</style>
	</nav>
	<div class="jumbotron">
		<div class="container">

	<h1>Ótima escolha!</h1>
	<p>Obrigada por comprar na Mirror Fashion!
	   Preencha seus dados para efetivar a compra.</p>
		
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
	<div class="panel panel-success">
		<div class="panel-heading">
	<h2 class="panel-title">Sua compra</h2>
		</div>
	<div class="panel-body">
	<dl>

		<dt>Produto</dt>
		<dd><?= $_POST['nome'] ?></dd>

		<dt>Preço</dt>
		<dd id="preco"><?= $_POST['preco'] ?></dd>
		
		<dt>Cor</dt>
		<dd><?= $_POST['cor'] ?></dd>

		<dt>Tamanho</dt>
		<dd><?= $_POST['tamanho'] ?></dd>
	</dl>
		<div class="form-group">
			<label for="qt">Quantidade</label>
			<input id="qt" class="form-group" type="number" min="0" max="99" value="1">
		</div>
		<div class="form-group">
			<label for="total">Total</label>
			<output for="qt valor" id="total" class="form-control">
				<?= $_POST["preco"] ?>
			</output>
		</div>
	</div>
	</div>
			</div>

		<form class="col-sm-8">
			<div class="row">
			<fieldset class="col-md-6">
				<legend>Dados Pessoais</legend>
				
				<div class="form-group">
					<label for="name">Nome completo</label>
					<input type="text" class="form-control" id="name" name="nome" autofocus required/>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<span class="input-group-addon">@</span>
					<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com.br" />
				</div>

				<div>
					<label form="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required/>
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox" value="sim" name="spam" checked/>
						Quero recebe novidade da Mirror Fashion!
					</label>
				</div>
			</fieldset>
			<fieldset class="col-md-6">
				<legend>Cartão de crédito</legend>

				<div class="form-group">
					<label for="numero-cartao">Número - CVV</label>
					<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999"/>
				</div>

				<div class="form-group">
					<label for="bandeira-cartao">Bandeira</label>
					<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
						<option value="master">MasterCard</option>
						<option value="visa">Visa</option>
						<option value="amex">American Express</option>
					</select>
				</div>

				<div class="form-group">
					<label for="validade-cartao">Validade</label>
					<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
				</div>
			</fieldset>
			</div>
			<button type="submit" class="btn btn-primary" class="btn-lg" class="pull-right">
				<span class="glyphicon glyphicon-thumps-up"></span>
				Confirmar Pedido
			</button>
		</form>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>
	<script src="js/converteMoeda.js"></script>
	<script src="js/testaConversao.js"></script>

	<script src="js/total.js"></script>
</body>
</html>