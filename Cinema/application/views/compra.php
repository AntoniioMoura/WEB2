<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Lista de produtos da tabela produtos">
    <meta name="author" content="blog.ismweb.com.br">
    
    <title>Comprar Ingresso</title>

    <!-- Bootstrap core CSS -->
    <link href="/trabalho/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->       
  </head>

  <body>    

    <div class="container">

      <div class="row">
                
        <h1>Comprar Ingresso</h1>   
        <ol class="breadcrumb">
              <li><a href="/">Inicio</a></li>          
              <li class="active">Comprar Ingresso</li>
        </ol>      

        <!-- Formulário de novo cadastro  -->
        <form action="salvar" name="form_add" method="post">
          
          <!-- Input text nome do produtos -->
          

          <!-- Input text preço do produtos -->
      
		   <div class="row">
            <div class="col-md-8">
              <label>Hora do Filme:</label>
              <input type="text" name="hora" value="15:00" class="form-control">
            </div>
          </div>
			   <div class="row">
            <div class="col-md-8">
              <label>Sala do filme:</label>
              <input type="text" name="sala" value="" class="form-control">
            </div>
          </div>
		   <div class="row">
            <div class="col-md-8">
              <label>Data:</label>
              <input type="text" name="data" value="" class="form-control">
            </div>
          </div>	
		  

          <!-- Button submit(enviar) formulário -->
          <br />
          <div class="row">
            <div class="col-md-2">
				<input type="hidden" name="valor" value="4">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div><!-- fim do button submit(enviar) formulário -->
          

        </form><!--Fim formulário de novo cadastro  -->

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/trabalho/bootstrap/css/bootstrap.min.css"></script>    
  </body>
</html>
