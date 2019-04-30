<?php
	session_start(); // Inicia a sessão
	session_destroy(); // Destrói a sessão limpando todos os valores salvos
        session_unset(); //limpamos as variaveis globais das sessões
	header("Location: index.php"); exit; // Redireciona o visitante

?>