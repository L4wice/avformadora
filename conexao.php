<?php
// db/conexao.php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'avaformadora';

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
?>
