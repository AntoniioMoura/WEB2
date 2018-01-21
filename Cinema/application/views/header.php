<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    
	
    <!-- Bootstrap core CSS -->
    <link href="/cinema/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
<link rel="stylesheet" type="text/css" href="/cinema/bootstrap/css/default.css">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 

  <body background="/cinema/bootstrap/image/fd-site.jpg">   
  <div class="container">
  <div class="row">
  <br>
          <div class="col-md-12">
		  <img src="/cinema/bootstrap/image/topo.png" class="img-responsive">
		  </div>
	</div>
  <!--Menu -->
	<div class="row">
          <div class="col-md-12">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
						aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
				<a class="navbar-brand" href="#">
					<img src="/cinema/bootstrap/image/hue.png">
				</a>
				</div>
				
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="http://localhost/cinema/index.php/Filmes/index">
							Inicio
						</a>
					</li>
					<li>
						<a href="http://localhost/cinema/index.php/Filmes/lancamentos">
							Lançamentos
						</a>
					</li>
					<li>
						<a href="http://localhost/cinema/index.php/Filmes/lista_filmes">
							Filmes
						</a>
					</li>				
					<li>
						<a href="http://localhost/cinema/index.php/Filmes/lista_produtos">
							Produtos
						</a>
					</li>
					<li>
						<a href="http://localhost/cinema/index.php/Filmes/contato">
							Contatos
						</a>
					</li>
					<li>
						<?php
								if($this->session->userdata('username')==''){
									echo '<a href="'.base_url().'Filmes/login">Efetuar Login'; 
								}else{
									echo '<a href="'.base_url().'Filmes/enter">Logout'; 
								}
									
							?>
							</a>
					</li>
						<li>
							<?php
								if($this->session->userdata('username')==''){
									echo '<a href="'.base_url().'Filmes/login">Visitante'; 
								}else{
									echo '<a href="'.base_url().'Filmes/perfil"> '.$this->session->userdata('username');
								}
									
							?>
							
						</a>
					</li>
				</ul>
				
			</div>
			</nav>
		</div>
	</div>