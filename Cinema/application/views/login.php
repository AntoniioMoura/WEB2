<?php 
	$this->load->view('header');
	?>
	<title>Login</title>

	
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	  <link href="/cinema/bootstrap/css/signin.css" rel="stylesheet">
	  </head>





  <body class="text-center">
    <form class="form-signin" method="post" action="<?php base_url(); ?>verificar_login">
      <h1 class="h3 mb-3 font-weight-normal titulo">Login</h1>
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus name="username">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
         <p class="titulo"> <input type="checkbox" value="remember-me"> Lembrar</p>
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
	  <?php
		echo $this->session->flashdata("error");
	  ?>
    </form>

	<p class="titulo">Não possui um conta ainda?</p>
	  <a href="http://localhost/cinema/index.php/Filmes/cliente"><button class="btn btn-lg  btn-block btn btn-danger form-signin" type="submit">Cadastrar</button></a>

  </body>
</html>

  
<?php 
	$this->load->view('footer');
	?>
