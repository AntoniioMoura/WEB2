<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('header');
?>
<head>
    <title>Novo Cliente</title>

  </head>

  <body>    

    <div class="container">

      <div class="row">
                
        <h1 class="titulo">Novo Cliente</h1>   
        <ol class="breadcrumb">
              <li><a href="/">Inicio</a></li>          
              <li class="active">Novo Cliente</li>
        </ol>      

        <!-- Formulário de novo cadastro  -->
        <form action="salvar" name="form_add" method="post" class="titulo">
          
          <!-- Input text nome do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Nome:</label>
              <input type="text" name="nome" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->
		   <div class="row">
            <div class="col-md-8">
              <label>Usuario:</label>
              <input type="text" name="usuario" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->
			<div class="row">
            <div class="col-md-8">
              <label>Senha:</label>
              <input type="password" name="senha" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->
          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Idade:</label>
              <input type="text" name="idade" value="" class="form-control">
            </div>
          </div><!-- fim input text preco produtos -->
		  
		   <div class="row">
            <div class="col-md-8">
              <label>CPF:</label>
              <input type="text" name="cpf" value="" class="form-control">
            </div>
          </div>
			   <div class="row">
            <div class="col-md-8">
              <label>CEP:</label>
              <input type="text" name="cep" value="" class="form-control">
            </div>
          </div>
		   <div class="row">
            <div class="col-md-8">
              <label>Telefone:</label>
              <input type="text" name="telefone" value="" class="form-control">
            </div>
          </div>	
		  
		   <div class="row">
				<div class="col-md-8">
				  <label>E-mail:</label>
				  <input type="text" name="email" value="" class="form-control">
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-8">
				  <label>Rua:</label>
				  <input type="text" name="rua" value="" class="form-control">
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-8">
				  <label>Bairro:</label>
				  <input type="text" name="bairro" value="" class="form-control">
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-8">
				  <label>Numero da Casa:</label>
				  <input type="text" name="numero" value="" class="form-control">
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-8">
				  <label>Complemento:</label>
				  <input type="text" name="complemento" value="" class="form-control">
				</div>
			  </div>

          <!-- Button submit(enviar) formulário -->
          <br />
          <div class="row">
            <div class="col-md-2">
				<input type="hidden" name="valor" value="2">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div><!-- fim do button submit(enviar) formulário -->
          

        </form><!--Fim formulário de novo cadastro  -->

      </div>

    </div><!-- /.container -->


 
<?php 
	$this->load->view('footer');
	?>
