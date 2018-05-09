<!-- Para saber mais  -->
<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Mirror Fashion</title> 
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="less/Estilo.less"/>
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)"/>
	<meta name="viewport" content="width=device-width"/>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
</head> 
<body>
	  <?php include("cabecalho.php"); ?>
	<div class="container destaque"> 
	
		<section class="busca">
			<h2>Busca</h2>
			
				<form>
					<input type="search"/>
					<input type="image" src="img/busca.png"/>
				</form>
		</section> <!-- fim . busca --> 
		
		<section class="menu-departamentos"> 
			<h2>Departamentos</h2> 
			
			<nav>
				<ul>
					<li>
						<a href="#">Blusas e Camisetas</a>
						<ul>
							<li><a href="#">Manga Curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa Casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav> 
		</section> <!-- Fim . menu-departamento -->
		<script type="text/javascript"> /* Banner rotativo */
			var banners = ["img/destaque-home.png","img/destaque-home-2.png"];
			var bannerAtual = 0;

			function trocaBanner(){
				bannerAtual = (bannerAtual + 1) % 2;
				document.querySelector('.destaque img').src =banners[bannerAtual];
			}

			setInterval(trocaBanner, 3000);
		</script>
		<img src="img/destaque-home.png" alt="Promoção: Big City Night">
	</div><!-- fim .container . destaque -->
	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<?php
					$conexao = mysqli_connect("179.188.16.168","mirrorfashion","loca1020","mirrorfashion");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0,12");
					
					while ($produto = mysqli_fetch_array($dados)):
				?>

			<li>
				<a href="produtos.php?id=<?= $produto['id'] ?> ">
					<figure>
						<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?> ">
						<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?> </figcaption>
					</figure>
				</a>
			</li>

		<?php endwhile; ?>

		</ol>
			<button type="button">Mostra mais</button>
		</section>
		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<ol>
				<?php
					$conexao = mysqli_connect("179.188.16.168","mirrorfashion","loca1020","mirrorfashion");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0,12");
					
					while ($produto = mysqli_fetch_array($dados)):
				?>

			<li>
				<a href="produtos.php?id=<?= $produto['id'] ?> ">
					<figure>
						<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?> ">
						<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?> </figcaption>
					</figure>
				</a>
			</li>

		<?php endwhile; ?>

		</ol>
			<button type="button">Mostra mais</button>
		</section>
	</div>
	  <?php include("rodape.php"); ?>
	  <script src="js/jquery.js"></script>
	  <script src="js/home.js"></script>
	  <script src="js/converteMoeda.js"></script>
	  <script src="js/testaConversao.js"></script>
	  <script src="js/less.js"></script>
</body>
</html> 
