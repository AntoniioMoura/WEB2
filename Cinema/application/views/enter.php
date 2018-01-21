
<?php
$this->load->view('header');
echo'<h2 class="titulo"> Obrigado pela visita - '.$this->session->userdata('username').'<h2>';
echo '<label> <a href="'.base_url().'Filmes/logout"><button class="btn btn-lg  btn-block btn btn-danger form-signin" type="submit">Logout</button></a></label>';
$this->load->view('footer');

?>

