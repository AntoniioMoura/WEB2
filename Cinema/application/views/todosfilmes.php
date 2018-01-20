<?php 
	$this->load->view('header');
?>

   <div class="row">
	<div class="col-md-12" align="center">
	<h1 class="titulo">Todos os Filmes</h1>
	<br>
	
	</div>
	</div>
		
		<!--<h1 class="titulo">Lista de Filmes</h1>

	<a  href="" target="_blank" class="btn btn-success margin-button15">Novo Produto</a>	-->
			
	<table class="table table-bordered titulo" >
				<thead>
					<tr>
					  <th class="text-center">Nome</th>
					  <th class="text-center">Duraçao</th>
					  <th class="text-center">Idade indicativa</th>
					  <th class="text-center">Genero</th>
					</tr>
				</thead>
				 <?php
					foreach ($cinema as $filmes)
					{        
						echo '<tr>';
						  echo '<td>'.$filmes->nome.'</td>'; 
						  echo '<td class="text-right">'.$filmes->duracao.'</td>'; 
						  echo '<td class="text-right">'.$filmes->idade.'</td>'; 
						  echo '<td class="text-right">'.$filmes->genero.'</td>'; 
						  echo '</td>'; 
						echo '</tr>';
					}
				?>

			</table>		  
		
	



   <?php 
	$this->load->view('footer');
	?>
