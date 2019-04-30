<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM cliente WHERE id_cliente=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variáveis para dados de entrada
 $nome = $_POST['nome'];
 $datadenascimento = $_POST['datadenascimento'];
 $cpf = $_POST['cpf'];
 $telefone = $_POST['telefone'];
 $celular = $_POST['celular'];
 $endereco = $_POST['endereco'];
 $bairro = $_POST['bairro'];
 $cidade = $_POST['cidade'];
 $estado = $_POST['estado'];
 $email = $_POST['email'];
 // variáveis para dados de entrada

 // consulta SQL para atualizar dados em banco de dados
 $sql_query = "UPDATE cliente SET nome='$nome',datadenascimento='$datadenascimento',cpf='$cpf',telefone='$telefone',celular='$celular',endereco='$endereco',bairro='$bairro',cidade='$cidade',estado='$estado',email='$email' WHERE id_cliente=".$_GET['edit_id'];
 // consulta SQL para atualizar dados em banco de dados
 
 // função de execução da consulta sql
 if(mysql_query($sql_query))
 {
  ?>
  
<script type="text/javascript">
  alert('Cliente alterado com sucesso!');
  window.location.href='consultarcliente.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Ocorreu um erro durante a alteração dos dados!');
  </script>
  <?php
 }
 // função de execução da consulta sql
}
if(isset($_POST['btn-cancel']))
{
 header("Location: consultarcliente.php");
}
?>
<!doctype html>
<html lang="pt-br"><head>
    <meta charset="iso-8859-1">
    <title>Clientes</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-car"></span> Bem Vindo!</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

<?php

// A sess?o precisa ser iniciada em cada p?gina diferente.
if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

// Verifica se n?o h? a vari?vel da sess?o que identifica o usu?rio.
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	// Destr?i a sess?o por seguran?a
	session_destroy();
        // Redireciona o visitante de volta pro login
	header("Location: index.php"); exit;
}

?>

                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"> </span><?php echo $_SESSION['UsuarioNome']; ?>
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
              <li class="dropdown-header">Driving School</li>
              <li class="divider"></li>
                <li><a tabindex="-1" href="logout.php">Sair</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-edit"></i>Cadastros<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
            <li><a href="cadastrarcliente.php"><span class="fa fa-caret-right"></span> Clientes</a></li>
            <li ><a href="cadastrarfuncionario.php"><span class="fa fa-caret-right"></span> Funcion&aacute;rios</a></li>
            <li ><a href="user.html"><span class="fa fa-caret-right"></span> Agenda</a></li>
            <li ><a href="cadastrarconta.php"><span class="fa fa-caret-right"></span> Contas</a></li>
    </ul></li>

    <li data-popover="true" data-content="Items in this group require a <strong><a href='http://portnine.com/bootstrap-themes/aircraft' target='blank'>premium license</a><strong>." rel="popover" data-placement="right"><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-bar-chart-o"></i> Relatórios<i class="fa fa-collapse"></i></a></li>
        <li><ul class="premium-menu nav nav-list collapse">
               
            <li ><a href="relatoriofinanceiro.php"><span class="fa fa-caret-right"></span> Financeiro</a></li>
            <li ><a href="premium-build.html"><span class="fa fa-caret-right"></span> Advanced Tools</a></li>
            <li ><a href="premium-colors.html"><span class="fa fa-caret-right"></span> Additional Color Themes</a></li>
    </ul></li>

        <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Account</a></li>
        <li><ul class="accounts-menu nav nav-list collapse">
            <li ><a href="sign-in.html"><span class="fa fa-caret-right"></span> Sign In</a></li>
            <li ><a href="sign-up.html"><span class="fa fa-caret-right"></span> Sign Up</a></li>
            <li ><a href="reset-password.html"><span class="fa fa-caret-right"></span> Reset Password</a></li>
    </ul></li>

        <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Legal<i class="fa fa-collapse"></i></a></li>
        <li><ul class="legal-menu nav nav-list collapse">
            <li ><a href="privacy-policy.html"><span class="fa fa-caret-right"></span> Privacy Policy</a></li>
            <li ><a href="terms-and-conditions.html"><span class="fa fa-caret-right"></span> Terms and Conditions</a></li>
    </ul></li>

        <li><a href="help.html" class="nav-header"><i class="fa fa-fw fa-question-circle"></i> Help</a></li>
            <li><a href="faq.html" class="nav-header"><i class="fa fa-fw fa-comment"></i> Faq</a></li>
                <li><a href="http://portnine.com/bootstrap-themes/aircraft" class="nav-header" target="blank"><i class="fa fa-fw fa-heart"></i> Get Premium</a></li>
            </ul>
    </div>

    <div class="content">
        <div class="header">
            <div class="stats">
              <p class="stat">&nbsp;</p>
</div>

            <h1 class="page-title">Clientes</h1>
                    <ul class="breadcrumb">
                      
                      <li><a href="menuprincipal.php">In&iacute;cio</a></li>
            <li class="active">Cadastro de Clientes</li>
        </ul>

        </div>
        <div class="main-content">
            




    <div class="panel panel-default">
        <a href="#page-stats" class="panel-heading" data-toggle="collapse">Alterar Cliente</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome*</label>
  	  	<input type="text" class="form-control" name="nome" value="<?php echo $fetched_row['nome']; ?>" placeholder="" required >
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="datadenascimento">Data de Nascimento*</label>
  	  	<input type="text" class="form-control" name="datadenascimento" value="<?php echo $fetched_row['datadenascimento']; ?>" placeholder="" required >
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF*</label>
  	  	<input type="text" class="form-control" name="cpf" value="<?php echo $fetched_row['cpf']; ?>" placeholder="" required >
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="telefone">Telefone*</label>
  	  	<input type="text" class="form-control" name="telefone" value="<?php echo $fetched_row['telefone']; ?>" placeholder="" required >
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="celular">Celular</label>
  	  	<input type="text" class="form-control" name="celular" value="<?php echo $fetched_row['celular']; ?>" placeholder="" >
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="endereco">Endereço*</label>
  	  	<input type="text" class="form-control" name="endereco" value="<?php echo $fetched_row['endereco']; ?>" placeholder="" required >
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label for="bairro">Bairro*</label>
  	  	<input type="text" class="form-control" name="bairro" value="<?php echo $fetched_row['bairro']; ?>" placeholder="" required >
  	  </div>
	</div>
	
	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label for="cidade">Cidade*</label>
  	  	<input type="text" class="form-control" name="cidade" value="<?php echo $fetched_row['cidade']; ?>" placeholder="" required >
  	  </div>        
                <div class="form-group col-md-2">
            <label for="estado">Estado</label>
            <select name="estado" placeholder="" required class="form-control" >
              <option selected="selected" value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AP">AP</option>
              <option value="AM">AM</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA">MA</option>
              <option value="MT">MT</option>
              <option value="MS">MS</option>
              <option value="MG">MG</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PR">PR</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RS">RS</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="SC">SC</option>
              <option value="SP">SP</option>
              <option value="SE">SE</option>
              <option value="TO">TO</option>
              </select>
              </div>
              
              <div class="form-group col-md-6">
  	  	<label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" value="<?php echo $fetched_row['email']; ?>" placeholder=""  >
          </div>
                
  	  </div>
	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" name="btn-update" class="btn btn-primary fa fa-pencil"> Alterar</button>
  		<a href="consultarcliente.php" type="reset" class="btn btn-primary fa fa-times"> Cancelar</a>
	  </div>
	</div>

  </form>

                    <div class="row"></div>
        </div>
    </div>

<div class="row"></div>

<div class="row"></div>


            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="" target="_blank"></a><a href="" target="_blank"></a></p>
                <p><p><p align="right">Copyright &copy; 2016 Driving School <a href="" target="_blank"></a></p>
          </footer>
        </div>
    </div>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>
