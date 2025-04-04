<!-- exercicio2/resultado.php -->
<?php
require_once '../db/conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();
$result = $stmt->get_result();

$autenticado = ($result->num_rows > 0);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado - Exercício 2</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Resultado da Autenticação</h2>
    <?php if ($autenticado): ?>
      <p style="color: green;">Login efetuado com sucesso!</p>
    <?php else: ?>
      <p style="color: red;">Usuário ou senha incorretos.</p>
    <?php endif; ?>
    <br>
    <a href="form.php">Tentar Novamente</a> |
    <a href="../index.php">Página Principal</a>
  </div>
</body>
</html>
