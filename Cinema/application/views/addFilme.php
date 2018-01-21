<?php 
	$this->load->view('header');
	?>


    <title>Novo Filme</title>

<script type="text/javascript">
			function validar_form_add(){
				var nome = form_add.nome.value;
				var descricao = form_add.descricao.value;
				var duracao = form_add.duracao.value;
				var idade = form_add.idade.value;
				var genero = form_add.genero.value;
				
				if(nome == ""){
					alert("Campo nome é obrigatorio");
					form_add.nome.focus();
					return false;
				}if(descricao == ""){
					alert("Campo descrição é obrigatorio");
					form_add.email.focus();
					return false;
				}if(duracao == ""){
					alert("Campo duração é obrigatorio");
					form_add.duracao.focus();
					return false;
				}if(idade == ""){
					alert("Campo idade é obrigatorio");
					form_add.idade.focus();
					return false;
				}if(genero == ""){
					alert("Campo genero é obrigatorio");
					form_add.genero.focus();
					return false;
				}
			}
		</script>    
  </head>

  <body>    

    <div class="container titulo ">

      <div class="row">
                
        <h1>Novo Filme</h1>   
        <ol class="breadcrumb">
              <li><a href="http://localhost/cinema/index.php/Filmes/index">Inicio</a></li>          
              <li class="active">Novo Filme</li>
        </ol>      

        <!-- Formulário de novo cadastro  -->
        <form action="salvar" name="form_add" method="post">
         
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
              <label>Duração</label>
              <input type="text" name="duracao" value="" class="form-control">
            </div>
          </div>
			
		   <div class="row">
            <div class="col-md-8">
              <label>Idade indicativa</label>
              <input type="text" name="idade" value="" class="form-control">
            </div>
          </div>	
		  
		   <div class="row">
				<div class="col-md-8">
				  <label>Genero</label>
				  <input type="text" name="genero" value="" class="form-control">
				</div>
			  </div>

          <!-- Button submit(enviar) formulário -->
          <br />
          <div class="row">
            <div class="col-md-2">
				<input type="hidden" name="valor" value="1">
              <button type="submit" class="btn btn-primary" onclick="return validar_form_add()">Cadastrar</button>
            </div>
          </div><!-- fim do button submit(enviar) formulário -->
          

        </form><!--Fim formulário de novo cadastro  -->

      </div>

    </div><!-- /.container -->


   <?php 
	$this->load->view('footer');
	?>

