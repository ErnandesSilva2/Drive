<?php
// Definimos o nome de usu�rio e senha de acesso
$usuario = "";
$senha = "";
 
// Criamos uma fun��o que exibir� uma mensagem de erro caso os dados estejam errados
function erro(){
    // Definindo Cabe�alhos
    header('WWW-Authenticate: Basic realm="Administracao"');
    header('HTTP/1.0 401 Unauthorized');
	// Mensagem que ser� exibida
    echo '<h1>Voce n&atilde;o tem permiss&atilde;o para acessar essa &aacute;rea</h1>';
	// P�ra o carregamento da p�gina
    exit;
}
 
// Se as informa��es n�o foram setadas
if (!isset($_SERVER['PHP_AUTH_USER']) or !isset($_SERVER['PHP_AUTH_PW'])) {
	erro();
} 
// Se as informa��es foram setadas
else {
	// Se os dados informados forem diferentes dos definidos
	if ($_SERVER['PHP_AUTH_USER'] != $usuario or $_SERVER['PHP_AUTH_PW'] != $senha) {
		erro();
	}
}
?>