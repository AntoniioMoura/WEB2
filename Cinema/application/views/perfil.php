
<?php
$this->load->view('header');

echo'<h2 class="titulo"> Bem vindo - '.$this->session->userdata('username'). '<br>Este é seu perfil <h2>';
$this->load->view('footer');


?>

</a>