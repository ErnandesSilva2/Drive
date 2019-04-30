<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; iso-8859-1" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Efetuar Login</title>
	
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<section id="logo">
		<p align="center"><a href="#"><img src="assets/images/png.png" alt="" /></a>
	</section>
	
	<section class="container">
		<section class="row">
			<form method="post" action="validacaologin.php" role="login">
				<div>
					<label>Usuário:</label>
					<input type="text" name="usuario" required class="form-control" />
				</div>
				
				<div>
					<label>Senha:</label>
					<input type="password" name="senha" required class="form-control" />
				</div>
			
				<section>
					<button type="submit" name="go" class="btn btn-block">Entrar</button>
					<p><a href="#"> </a></p>
					<p><a href="#"> </a></p>

<p><p align="center">Copyright &copy; 2016 Driving School</p>
				</section>
			</form>
		</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>