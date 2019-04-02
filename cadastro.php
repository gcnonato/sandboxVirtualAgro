<!DOCTYPE html>
<html>
<head>
	<title>CADASTRO - Virtual Agro</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" sizes="64x64" href="imagens/logo/virtual-agro-logo-png.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<!-- ESSE NOVO LINK PRO NOSSO CSS IMPEDE AQUELE BUG QUE A GENTE MUDAVA NO CSS, MAS NÃO MUDAVA NO SITE. -->
	<!-- REPLICAR EM TODAS AS PÁGINAS INTERATIVAS -->
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
				}
				?>
			</div>                
		</div>            
	</header>
	<div class="all">
		<section class="conteudo">
				<!-- <form action="accessManager.php?tipoOperacao=cadastro" method="POST">
					<div class="login-senha">
						<input type="text" name="campoNome" required="" placeholder="NOME">
						<button class="login" type="submit" disabled="disabled">
							<i class="fas fa-user-check"></i>
						</button>
					</div>
					<div class="login-senha">
						<input type="text" name="campoUsername" required="" placeholder="USERNAME">
						<button class="login" type="submit" disabled="disabled">
							<i class="fas fa-user"></i>
						</button>
					</div>
					<div class="login-senha">
					<input type="password" name="campoSenha" required="" placeholder="SENHA">
						<button class="login" type="submit" disabled="disabled">
							<i class="fas fa-key"></i>
						</button>
					</div>
					<button class="buscar" type="submit">
                		<span class="icon-text">ENVIAR</span>
            	        <span class="icon-menu"><i class="fa fa-chevron-circle-right"></i></span>
        	    	</button>				
        	    </form> -->

        	    <form class="form-cadastro" name="formulario">
        	    	<ul class="progresso">

        	    		<li class="ativo">Início</li>
        	    		<li>Meio</li>
        	    		<li>Fim</li>

        	    	</ul>
        	    	<div class="erro" id="mensagem" style="width: fit-content; margin: auto">
        	    		<!-- CAMPO DE MENSAGEM DE ERRO -->
        	    	</div>

        	    	<fieldset id="etapa1Cadastro"> <!-- AQUI ELE INSERE O NOME DELE, E O NÚMERO DE TELEFONE -->
        	    		<h2>Configurações da conta</h2>
        	    		<h3>Configurações Iníciais</h3>
        	    		<input type="text" name="campoNome" required="" placeholder="Digite o seu nome...">
        	    		<input type="text" name="telefone" required="" placeholder="Digite o seu telefone..." id="telefone" maxlength="15" pattern="[0-9]+">

        	    		<input type="button" name="proximo" class="next acao" value="Próximo">        	    	
        	    	</fieldset>


        	    	<fieldset id="etapa2Cadastro"> <!-- VERIFICAÇÃO OPT , VIA SMS -->
        	    		<h2>Configurações da conta</h2>
        	    		<h3>Um SMS foi enviado para você!</h3>
        	    		<input type="number" placeholder="Digite o código do sms..." id="sms" max="6" maxlength="6">

        	    		<input type="button" name="prev" class="prev acao" value="Anterior">
        	    		<input type="button" name="proximo2" class="next acao" value="Próximo">        	    	        	    	
        	    	</fieldset>




        	    	<fieldset id="etapa3Cadastro"> <!-- DEFINE O PIN DE ACESSO 4 DÍGITOS -->
        	    		<h2>Configurações da conta</h2>
        	    		<h3>Insira PIN de 4 digitos - esse PIN servirá como sua senha</h3>
        	    		<input type="password" name="campoSenha" required="" placeholder="Informe um PIN DE ACESSO..." maxlength="4" pattern="[0-9]+">
        	    		<input type="password" name="confirmaSenha" required="" placeholder="Confirme O PIN." maxlength="4" pattern="[0-9]+">
        	    		<input type="button" name="prev" class="prev acao" value="Anterior">

        	    		<input type="submit" name="cadastrar" class="acao" value="Finalizar">
        	    	</fieldset>
        	    	

        	    	<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        	    	<script type="text/javascript" src="js/functions-cadastro_v2.js?v=<?php echo time(); ?>"></script>
        	    	<!-- SCRIPT RENOVADO -->

        	    </form>
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

        <?php

        ?>

    </body>
    </html>