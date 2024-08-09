<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'telemedic';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Teste de conexão caso precise.
//if ($conexao->connect_errno) {
//    echo "Erro: " . $conexao->connect_error;
//} else {
//    echo "Conexão efetuada com sucesso!";
//}
?>
