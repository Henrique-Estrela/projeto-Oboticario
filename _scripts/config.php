<?php
$servidor = 'www.devlsolutions.com.br';
$usuario = 'devlso03_erik';
$senha = 'senai@123';
$banco = 'devlso03_eriksenai';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>