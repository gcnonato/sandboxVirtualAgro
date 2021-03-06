<!DOCTYPE html>
<html>
	<head>
	<title>MEUS ANÚNCIOS - VIRTUAL AGRO</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" sizes="64x64" href="imagens/logo/virtual-agro-logo-png.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- ESSE NOVO LINK PRO NOSSO CSS IMPEDE AQUELE BUG QUE A GENTE MUDAVA NO CSS, MAS NÃO MUDAVA NO SITE. -->
	<!-- REPLICAR EM TODAS AS PÁGINAS INTERATIVAS -->
	<meta name="viewport" content="width=device-width, initial-scale=0.7">
	<meta name="theme-color" content="#2a7766">

	</head>
	<body>
		<header class="navigation">
				<div class="container-header">
					<div class="left-side">
						<button type="button" class="btn-menu  js-btn-menu">
						<span class="icon-menu"><i class="fa fa-bars"></i></span>
						<span class="text-menu">MENU</span>
                        <?php 

                            include_once('tools.php');
                            session_start();

                            if(!isset($_SESSION['id'])){
                                construirMenuLateralSemLogin(); 
                            }else{
                                construirMenuLateralComLogin();
                            }
                        ?>
					</button>
				</div>
				<img class="logo-header" src="imagens/logo/virtual-agro-logo-nome.png">
				<div class="right-side">
					<?php
					if(!isset($_SESSION['id'])) {
						construirMenuLogin();
					}else{
						construirLogout();
					}
					?>                                     
				</div>                
			</div>            
		</header>
		<div class="all">
			<section class="conteudo">
				<h2> <a href='site.php'> VOLTAR </a> </h2>
				<h1 class='chamadaPrincipal'>Meus Anúncios</h1>
				<?php 

				$conteudo = '';

					if (!isset($_SESSION['id'])) {
						ECHO "ACESSO NÃO AUTORIZADO";
					}else{
						$meuid = $_SESSION['id'];

						$meusAnuncios = getAllMeusAnuncios($meuid);

						if(mysqli_num_rows($meusAnuncios) == 0){
							echo "<div id ='detalhesproduto'>";
							echo "<div class='semAnunciantes'>";
							echo "<h3>Oops!</h3>";
							echo "<p>VOCÊ AINDA NÃO TEM ANÚNCIOS PUBLICADOS ! </p>";
							echo "<tr>";
							echo "</div>";
							echo "</div>";
						}

						while($coluna = mysqli_fetch_array($meusAnuncios)) {
							echo "<div class='meuAnuncio'>";
							$idProd = $coluna['id_produto'];
							echo "<div class='borda'>";
							echo "<div >"; //
							echo "<a href='anuncio.php?idAnuncio={$coluna['id']}'>";
							echo getImagemProduto($idProd);
							echo "</a>";
							echo "</div>"; //
							echo "</div>"; //
							echo "<h3>"; //
							echo getNomeProdutoPeloID($idProd);
							echo "</h3>";
							echo "<div class='info'>"; //
							//echo "<b>CATEGORIA: </b>" . $coluna['categoria'] ;
							echo "</div>"; //
							echo "<div class='info'>"; //

							if (empty($coluna['observacao'])) {
								$conteudo = "* SEM CONTEÚDO *";
								echo "<p style=font-size:25px;font-weight:bolder;color:orangered;>". $conteudo;
							}else{
								echo "<b>CONTEÚDO</b>";
								$conteudo = $coluna['observacao'];
								echo "<p style=font-size:25px;font-weight:bolder;>". $conteudo;
							}

							echo "</div>"; //
							echo "<div class='info'>"; //
							echo "<b>PREÇO</b>" . "<p style=font-size:25px;font-weight:bolder;> R$". $coluna['preco'] . " - " . $coluna['texto_anuncio'];
							echo "</div>"; //

							echo "<div class='visitar'>"; //
							echo "<a href='anuncio.php?idAnuncio={$coluna['id']}'> VISITAR ANÚNCIO </a>";
							echo "</div>"; //
							echo "<div class='editar'>"; //
							echo "<a href='editarAnuncio.php?idAnuncio={$coluna['id']}'> EDITAR ANÚNCIO </a>";
							echo "</div>"; //
							echo "<div class='excluir'>"; //
							echo "<a href='excluirAnuncio.php?idAnuncio={$coluna['id']}'> EXCLUIR ANÚNCIO </a>";
							echo "</div>"; //
							echo "</div>";
							}
						}

				?>
			</section>
		</div>		               
		<footer>
			<div>
				<a class="brand" href="#">
					<img class="logo" src="./imagens/logo/virtual-agro-logo-png.png" alt="">            
				</a>
				<hr>
				<div class="copyright">Copyright 2019 © <a href="#"><b>Virtual Agro</b></a>.</div>
			</div>
		</footer>
	</body>
</html>