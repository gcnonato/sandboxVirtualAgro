<!DOCTYPE html>
<html>
	<head>
		<title>NOVO ANÚNCIO - Virtual Agro</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" sizes="64x64" href="imagens/logo/virtual-agro-logo-png.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="css/style.css" rel="stylesheet">
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
						construirMenuLateralComLogin();						
					?>
				</button>
			</div>
			<img class="logo-header" src="imagens/logo/virtual-agro-logo-nome.png">
			<div class="right-side">                                        
			</div>                
		</div>            
	</header>
		<div class="all">
			<section class="conteudo">
				<?php
					include_once('tools.php');

  					if((!isset ($_SESSION['id']))){ //CASO NÃO ESTEJA LOGADO
  						unset($_SESSION['nome']);
						unset($_SESSION['id']);
						header('location:index.php');
						ECHO "VOCÊ NÃO ESTÁ LOGADO !";
						header('location:index.php');
					}
				?>
<!--
				<form action="preAnuncio.php" method="post">

					<label> QUERO ANUNCIAR </label>
		 			<select required="" name="produto">
		 				<option value="">--</option>
		 				 VAI CONSTRUIR OS OPTION 
		 				?php
		 					listarTodosProdutos();
		 				?>
		 			</select>

						<div class="linha">
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="kg" alt="Kg" checked>
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text"><b>KG</b></span>
									</label>
							</div>                    
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="un" alt="Unidade">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">UNIDADE</span>
									</label>
							</div>
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="1/2kg" alt="1/2kg">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">1/2KG</span>
									</label>
							</div>
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="pacote" alt="Pacote">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">PACOTE</span>
									</label>
							</div>
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="bandeja" alt="Bandeja">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">BANDEJA</span>
									</label>
							</div>												
	                	</div>

					<label>OBSERVAÇÕES</label>
					 <input type="textarea" name="textoAnuncio" required=""> 
					<textarea name="textoAnuncio"></textarea>
					<button class="buscar" type="submit">
                		<span class="icon-text">ENVIAR</span>
            	        <span class="icon-menu"><i class="fa fa-chevron-circle-right"></i></span>
        	    	</button>
				</form>
				-->
				<form class="form-cadastro" name="anunciar">
					<ul class="progresso" id="progresso-anuncio">
						<li class="ativo">Categoria</li>
						<li>Produto</li>
						<li>Forma</li>	
						<li>OBSERVAÇÕES</li>
						<li>Pré-Anúncio</li>					
					</ul>
					<div class="erro"></div>
					<fieldset>
						<h2>Novo Anúncio</h2>
						<h3>Escolha a categoria para anúnciar...</h3>
						<br><br><br><br>
						<select name="categoria" id="categoria">
							<option value="frutas">FRUTA</option>
							<option value="verduras">verduras</option>
							<option value="legumes">legumes</option>
							<option value="graos">graos</option>
							<option value="temperos">temperos</option>
							<option value="especiarias">especiarias</option>
							<option value="outros">outros</option>
						</select>
						<br><br>
						<input type="button" name="proximo" class="next acao" value="Próximo">        	    							
					</fieldset>
					<fieldset>
						<h2>Novo Anúncio</h2>
						<h3>Escolha um produto para anunciar</h3>
						<select required="" name="produto" id="produto">
							<option value="">Escolha a Subcategoria</option>
		 				</select>
						 <br><br>
						<input type="button" name="prev" class="prev acao" value="Anterior">
						<input type="button" name="proximo2" class="next acao" value="Próximo">        	    	
					</fieldset>
					<fieldset>
						<h2>Novo Anúncio</h2>
						<h3>Como deseja anúnciar...</h3><br><br><br><br>
						<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="kg" alt="Kg" checked>
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text"><b>KG</b></span>
									</label>
							</div>                    
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="un" alt="Unidade">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">UNIDADE</span>
									</label>
							</div>
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="1/2kg" alt="1/2kg">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">1/2KG</span>
									</label>
							</div>
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="pacote" alt="Pacote">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">PACOTE</span>
									</label>
							</div>
							<div class="check-box">
								<input id="" class="" type="radio" name="atributo" value="bandeja" alt="Bandeja">
									<label for="">
										<span class="icon-menu"><span class="icon"></span></span>
										<span class="icon-text">BANDEJA</span>
									</label>
							</div>						
						<input type="button" name="prev" class="prev acao" value="Anterior">
						<input type="button" name="proximo3" class="next acao" value="Próximo">        	    	        	    	
					</fieldset>
					<fieldset>
						<h2>Novo Anúncio</h2>
						<h3>Observações sobre o produto</h3>
					<!--	<input type="textarea" name="textoAnuncio" required=""> -->
						<textarea name="textoAnuncio"></textarea>
						<input type="button" name="prev" class="prev acao" value="Anterior">
						<input type="button" name="proximo4" class="next acao" value="Próximo">        	    	
					</fieldset>
					<fieldset>
						<h2>Novo Anúncio</h2>
						<h3>Confirmar esse anúncio???</h3>

						<input type="button" name="prev" class="prev acao" value="Anterior">
						<input type="submit" class="acao" value="Finalizar">
					</fieldset>

					<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
					<script type="text/javascript" src="js/functions-anuncio.js"></script>

				</form>

			<h2> <a href='site.php'>VOLTAR</a> </h2>

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