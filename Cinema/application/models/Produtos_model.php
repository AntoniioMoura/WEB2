<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos_model extends CI_Model
{	
    //Lista todos os produtos da tabela filmes	
    public function getFilme()
    {                                 
        $query = $this->db->get("filme");
        return $query->result();
    }

       	 
		 //Adiciona um novo produtos na tabela produtos
    public function addFilme($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('filme', $dados);		
	endif;
	}   
	
	 public function addCliente($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('cliente', $dados);		
	endif;
	} 
	
	 public function addIngresso($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('ingresso', $dados);		
	endif;
	} 
	public function addCompraIngresso($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('compra', $dados);		
	endif;
	}   
	public function addProduto($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('produto', $dados);		
	endif;
	} 
	
	   public function pesquisa_id($dados=NULL){
        if($dados!=NULL){
            $query = $this->db->query('SELECT * FROM filme WHERE id="'.$dados['id'].'"');
            if ($query->result()){
				return $query->result();
			}else{
				return 0;
        }
    }
}

	public function can_login($username, $password){
		$this->db->where('username',$username);
		$this->db->where('senha',$password);
		$query=$this->db->get('cliente');
		if($query->num_rows()>0){
			return true;
		}else{
			return false;
		}
		
	}
	
	
/*
 public function getFilmeByID($id=NULL)
    {
    if ($id != NULL):
        //Verifica se a ID no banco de dados
        $this->db->where('id', $id);        
        //limita para apenas um regstro    
       $this->db->limit(1);
        //pega os produto
        $query = $this->db->get("produtos");        
        //retornamos o produto
        return $query->row();   
    endif;
    } 
	
	
	//Atualizr um produto na tabela produtos
    public function editarProduto($dados=NULL, $id=NULL)
    {
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $id != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('produtos', $dados, array('id'=>$id));      
    endif;
    }   
	*/
	
}
