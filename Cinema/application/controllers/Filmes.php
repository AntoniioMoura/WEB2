<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filmes extends CI_Controller {	
	
	//Página de listar produtos
	
	public function index()
	{		
		$this->load->model('Produtos_model', 'cinema');				
		$data['cinema'] = $this->cinema->getFilme();
		$this->load->view('inicio', $data);
	}
	public function lancamentos()
	{					
		$this->load->model('Produtos_model', 'cinema');				
		$data['cinema'] = $this->cinema->getFilme();
		$this->load->view('listarfilmes', $data);
	}

	//Página de adicionar produto
	public function add()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('addFilme');
	}
	
	public function verificar_login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('Produtos_model');
			if($this->Produtos_model->can_login($username, $password)){
				$session_data=array(
					'username'=>$username
				);
				echo "<script>alert('Mensagem');</script>";
				$this->session->set_userdata($session_data);
				redirect(base_url().'Filmes/enter');
			}else{
					$this->session->set_flashdata('error','Usuario ou senha invalida');
					redirect(base_url().'Filmes/login');
			}	
		}else{
			$this->login();
		}
	}
	
		public function enter(){
			if($this->session->userdata('username')!=''){
				$this->load->view('enter');
			}else{
				redirect(base_url().'Filmes/login');
			}
		}
		
		public function logout(){
			$this->session->unset_userdata('username');
			redirect(base_url().'Filmes/login');
			
		}
	
	
		public function login()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('login');
	}
	public function genero()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('genero');
	}
	
	public function lista_filmes()
	{				
		$this->load->model('produtos_model', 'cinema');
		$data['cinema'] = $this->cinema->getFilme();	
		$this->load->view('todosfilmes',$data);
		

	}
	public function cliente()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('cliente');
	}
		public function ingresso()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('ingresso');
	}
	public function compra()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('compra');
	}
		public function confirma()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('confirma');
	}
	public function produto()
	{				
		$this->load->model('produtos_model', 'cinema');	
		$this->load->view('produto');
	}
	
	

	
	
	
	
	public function salvar()
	{
		if($this->input->post('valor')=="1"){		
				//Carrega o Model Produtos				
				$this->load->model('produtos_model', 'cinema');

				//Pega dados do post e guarda na array $dados
				$dados['nome'] = $this->input->post('nome');
				$dados['descricao'] = $this->input->post('descricao');
				$dados['duracao'] = $this->input->post('duracao');	
				$dados['idade'] = $this->input->post('idade');	
				$dados['genero'] = $this->input->post('genero');				
							
				
					$this->cinema->addFilme($dados);
					redirect("/");		
		}
		if($this->input->post('valor')=="2"){		
				//Carrega o Model Produtos				
				$this->load->model('produtos_model', 'cinema');

				//Pega dados do post e guarda na array $dados
				$dados['nome'] = $this->input->post('nome');
				$dados['username'] = $this->input->post('usuario');
				$dados['senha'] = $this->input->post('senha');
				$dados['idade'] = $this->input->post('idade');
				$dados['cpf'] = $this->input->post('cpf');	
				$dados['cep'] = $this->input->post('cep');	
				$dados['tel'] = $this->input->post('telefone');				
				$dados['email'] = $this->input->post('email');				
				$dados['rua'] = $this->input->post('rua');	
				$dados['bairro'] = $this->input->post('bairro');
				$dados['numero'] = $this->input->post('numero');	
				$dados['complemento'] = $this->input->post('complemento');					
					$this->cinema->addCliente($dados);
					$this->load->view('confirma');
							
		}	
		
		if($this->input->post('valor')=="3"){		
				//Carrega o Model Produtos				
				$this->load->model('produtos_model', 'cinema');

				//Pega dados do post e guarda na array $dados
				$dados['qtd'] = $this->input->post('qtd');
				$dados['preco'] = $this->input->post('preco');
				$dados['hora'] = $this->input->post('hora');	
				$dados['sala'] = $this->input->post('sala');	
				$dados['data'] = $this->input->post('data');				
				$dados['filme_fk'] ="2"  ;				
							
					$this->cinema->addIngresso($dados);
					echo ("Cadastro Efetuado com sucesso");
							
		}	
		if($this->input->post('valor')=="4"){		
					//Carrega o Model Produtos				
					$this->load->model('produtos_model', 'cinema');

					//Pega dados do post e guarda na array $dados
					$dados['qtd'] = $this->input->post('qtd');
					$dados['preco'] = $this->input->post('preco');
					$dados['hora'] = $this->input->post('hora');	
					$dados['sala'] = $this->input->post('sala');	
					$dados['data'] = $this->input->post('data');				
					$dados['filme_fk'] ="2"  ;				
								
						$this->cinema->addIngresso($dados);
						echo ("Cadastro Efetuado com sucesso");
								
			}		
		if($this->input->post('valor')=="5"){		
				//Carrega o Model Produtos				
				$this->load->model('produtos_model', 'cinema');

				//Pega dados do post e guarda na array $dados
				$dados['nome'] = $this->input->post('nome');
				$dados['descricao'] = $this->input->post('descricao');
				$dados['preco'] = $this->input->post('preco');	
				$dados['qtd'] = $this->input->post('qtd');		
							
					$this->cinema->addProduto($dados);
					echo ("Cadastro Efetuado com sucesso");							
		}		
	}
  public function pesquisa_id($id) {
        $this->load->model('Produtos_model', 'cinema');
        $dados['id'] = $this->input->post('id');
		$this->load->view('listarfilmes', $data);
        $this->index($resultado);
    }	

}
	
	
	
/*	
	//Página de editar produto
public function editar($id=NULL)	
{						
	//Verifica se foi passado um ID, se não vai para a página listar produtos
	if($id == NULL) {
		redirect('/');
	}

	//Carrega o Model Produtos				
	$this->load->model('produtos_model', 'produtos');

	//Faz a consulta no banco de dados pra verificar se existe
	$query = $this->produtos->getProdutoByID($id);

	//Verifica que a consulta voltar um registro, se não vai para a página listar produtos
	if($query == NULL) {
			print_r("Nao foi passado nenhum registro");
	}
	
	//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;	
	$dados['produto'] = $query;

	//Carrega a View
	$this->load->view('editar', $dados);		
}
	
	
	

*/
	

