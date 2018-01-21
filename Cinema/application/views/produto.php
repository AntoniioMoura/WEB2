<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <?php 
	$this->load->view('header');
	?>
	
	



    <title >Novo Produto</title>

  
  </head>

  <body>    

    <div class="container">

      <div class="row" >
                
        <h1 class="titulo">Novo Produto</h1>   
        <ol class="breadcrumb">
              <li><a href="http://localhost/cinema/index.php/Filmes/index">Inicio</a></li>          
              <li class="active">Novo Produto</li>
        </ol>      

        <!-- Formulário de novo cadastro  -->
        <form action="salvar" name="form_add" method="post" class="titulo">
          
          <!-- Input text nome do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Nome</label>
              <input type="text" name="nome" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->

          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Descrição</label>
              <input type="text" name="descricao" value="" class="form-control">
            </div>
          </div><!-- fim input text preco produtos -->
		  
		   <div class="row">
            <div class="col-md-8">
              <label>Preço: </label>
              <input type="text" name="preco" value="" class="form-control">
            </div>
          </div>
			
		   <div class="row">
            <div class="col-md-8">
              <label>Quantidade: </label>
              <input type="text" name="qtd" value="" class="form-control">
            </div>
          </div>	
		  
   
          <!-- Button submit(enviar) formulário -->
          <br />
          <div class="row">
            <div class="col-md-2">
				<input type="hidden" name="valor" value="5">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div><!-- fim do button submit(enviar) formulário -->
          

        </form><!--Fim formulário de novo cadastro  -->

      </div>

    </div>
	<?php 
	$this->load->view('footer');
	?>