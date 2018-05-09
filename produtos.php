<?php
	$conexao = mysqli_connect("179.188.16.168","mirrorfashion","loca1020","mirrorfashion");
	$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
	$produto = mysqli_fetch_array($dados);
?>

<!DOCTYPE html> 
<html>
	<head> 
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width">
		<title><?= $produto['nome'] ?></title> 
		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/Estilo.css"/>
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)"/>
		<link rel="stylesheet" href="css/produto.css"/>
	</head> 
	<body>
		<?php include("cabecalho.php"); ?>
			<div class="produto-back">
			<div class="container">
			<div class="produto"> 
				<h1><?= $produto['nome'] ?></h1> 
				<p><?= $produto['preco'] ?></p>

				<div class="fb-like" data-href="http://www.mirrorfashion.net"
					data-send="false" data-layout="box_count"
					data-width="58" data-show-faces="false">
					
				</div>

				<a href="https://twitter.com/share"
					class="twitter-share-button" data-count="vertical">Tweet</a>
				
				<form action="checkout.php?id=<?= $produto['id'] ?>" method="POST"> 
					<fieldset class="cores">
						<legend>Escolha a cor:</legend> 
						
						<input type="radio" name="cor" value="verde" id="verde" checked/>
						<label for="verde">
							<img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="verde"/>
						</label>
						
						<input type="radio" name="cor" value="rosa" id="rosa"/>
						<label for="rosa">
							<img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="rosa">
						</label>
						
						<input type="radio" name="cor" value="azul" id="azul"/>
						<label for="azul">
							<img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="azul"/> 
						</label> 
						
					</fieldset> 
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>

						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" 
						id="tamanho">

						<output for="tamanho" name="valortamanho">42</output>
					</fieldset>
					<input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
					<input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
						<input type="submit" class="comprar" value="Comprar"/>
					<input type="hidden" name="id" value="<?= $produto['id'] ?>">
				</form>
			</div>
			<div class="detalhes">
				<h2>Detalhes do Produto</h2>

				<p><?= $produto['descricao'] ?></p>

				<table>
					<trhead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</trhead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Blusa 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul,Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem<td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
		<?php include("rodape.php"); ?>
		<script src="js/jquery.js"></script>
		<script src="js/produto.js"></script>
		<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
		if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
		js.src="http://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
	</body> 
</html>