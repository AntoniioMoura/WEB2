<?php 
	$this->load->view('header');
	?>

   <div class="row">
	<div class="col-md-12" align="center">
	<h1 class="titulo" color="branco">Filmes em destaque</h1>
	<br>
	
	</div>
	</div>
<!-- Corpo do site -->
      <div class="row">
		 <div class="col-md-12">
		
		<form method="post" name="pesquisa_id">
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="http://localhost/cinema/bootstrap/image/1.jpg" alt="Homem aranha">
			  
			  <input type="hidden" name="id" value="1">	
			  <div class="caption">
				<?php
					foreach ($cinema as $filmes){
						  if($filmes->id==1){
						  $id = $filmes->id;
						  echo"Descrição: ".$filmes->descricao;
						  }
					}
					
					?>
				
				<p>...</p>
				<p align="right"><a href="#" class="btn btn-primary btn-lg" role="button">Sobre</a></p>
			  </div>
			</div>
		  </div>
		  </form>
		   <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="http://localhost/cinema/bootstrap/image/2.jpg" alt="Homem aranha">
			  <div class="caption">
				<p>
				<?php
					foreach ($cinema as $filmes){
						 if($filmes->id==2){
						  $id = $filmes->id;
							echo $filmes->genero."</br>";
						  echo $filmes->descricao;
						  }
					}
					
					?>
				
				
				</p>
				<p align="right"><a href="#" class="btn btn-primary btn-lg" role="button">Sobre</a></p>
			  </div>
			</div>
		  </div>
		
			
		   <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="http://localhost/cinema/bootstrap/image/3.jpg" alt="Homem aranha">
			  <div class="caption">
				<input type="hidden" name="id">		
					<p>
					<?php
					foreach ($cinema as $filmes){
						  if($filmes->id==3){
						  $id = $filmes->id;
						  echo $filmes->descricao;
						  }
					}
					
					?>
					</p>
				<p align="right"><a href="#" class="btn btn-primary btn-lg" role="button">Sobre</a></p>
			  </div>
			</div>
		  </div>
		    </div>


<?php 
	$this->load->view('footer');
?>
