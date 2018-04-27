<!-- Para saber mais  -->
<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Mirror Fashion</title> 
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/Estilo.css"/>
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)"/>
	<meta name="viewport" content="width=device-width"/>
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
		<img src="img/destaque-home.png" alt="Promoção: Big City Night">
	</div><!-- fim .container . destaque -->
	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<!-- primeiro produto-->
				<li>
					<a href="produto.html">
					<figure>
					<img src="img/produtos/miniatura1.png">
						<figcaption>Fuzz Cardigan por R$129,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura2.png">
						<figcaption>Camiseta Bad to the bone por R$39,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura3.png"/>
						<figcaption>Cardigan CB Design por R$59,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura4.png">
						<figcaption>Casaco CB Design por R$139,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura5.png">
						<figcaption>Regata CB Design por R$29,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura6.png">
						<figcaption>Regata CB Design por R$29,90</figcaption>
					</figure>
					</a>
				</li>
			</ol>
		</section>
		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<!-- primeiro produto-->
				<li>
					<a href="produto.html">
					<figure>
					<img src="img/produtos/miniatura7.png">
						<figcaption>Camiseta CB Design por R$49,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura8.png">
						<figcaption>Camiseta CB Design por R$49,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura9.png">
						<figcaption>Camiseta xadrez CB Design R$89,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura10.png">
						<figcaption>Reglan CB Design R$69,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura11.png">
						<figcaption>Short CB Design R$49,90</figcaption>
					</figure>
					</a>
				</li>
				<li>
					<a href="produto.png">
					<figure>
					<img src="img/produtos/miniatura12.png">
						<figcaption>Camisa CB Design R$79,90</figcaption>
					</figure>
					</a>
				</li>
			</ol>
		</section>
	</div>
	  <?php include("rodape.php"); ?>
	  <script src="js/converteMoeda.js"></script>
	  <script src="js/testaConversao.js"></script>
</body>
</html> 
