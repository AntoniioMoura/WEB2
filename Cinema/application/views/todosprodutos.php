<?php 
	$this->load->view('header');
?>
	<title>Produtos</title>
   <div class="row">
	<div class="col-md-12" align="center">
	<h1 class="titulo">Todos os Produtos</h1>
	  <?php
		if($this->session->userdata('username')=='admin'){
		echo	'<a  href="http://localhost/cinema/index.php/Filmes/Produto"  class="btn btn-success margin-button15">Novo Produto</a>';
		}
			?>
	<br>
	
	</div>
	</div>
		


	
			
	<table class="table table-bordered titulo" >
				<thead>
					<tr>
					  <th class="text-center">Nome</th>
					  <th class="text-center">Descrição</th>
					  <th class="text-center">Preço</th>
					  <th class="text-center">Quantidade</th>
					 
					  
					  <?php
						if($this->session->userdata('username')=='admin'){
						echo'<th colspan="2" class="text-center">Opções</th>';
						}else{
						echo	 '<th class="text-center">Comprar</th>';
						}
						?>
					</tr>
				</thead>
				 <?php
					foreach ($cinema as $filmes)
					{        
						echo '<tr>';
						  echo '<td>'.$filmes->nome.'</td>'; 
						  echo '<td class="text-right">'.$filmes->descricao.'</td>'; 
						  echo '<td class="text-right">'.$filmes->preco.' R$</td>'; 
						  echo '<td class="text-right">'.$filmes->qtd.'</td>';
						  if($this->session->userdata('username')=='admin'){
							  echo "<td align='center' > <img height='30' width='30' src=\"/cinema/bootstrap/image/icone-editar.png\"> </td>'";
							  echo "<td align='center' > <img height='30' width='30' src=\"/cinema/bootstrap/image/icone-delete.png\"> </td>'";
						  }else{
							echo "<td align='center' > <img height='30' width='30' src=\"/cinema/bootstrap/image/add.png\"> </td>'";
						  }
						  echo '</td>'; 
						echo '</tr>';
					}
				?>

			</table>		  
		
	



   <?php 
	$this->load->view('footer');
	?>
