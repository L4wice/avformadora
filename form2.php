<!-- exercicio2/form.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 2 - Autenticação</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Exercício 2 - Autenticação</h2>
    <form action="resultado.php" method="POST">
      <label for="login">Login:</label>
      <input type="text" name="login" id="login" required>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" required>

      <button type="submit">Entrar</button>
    </form>
    <br>
    <a href="../index.php">Voltar à Página Principal</a>
  </div>
</body>
</html>
