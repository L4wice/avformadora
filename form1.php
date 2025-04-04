<!-- exercicio1/form.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 1 - Repetições</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Exercício 1 - Repetição de Nome e Sobrenome</h2>
    <form action="resultado.php" method="POST">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required>

      <label for="sobrenome">Sobrenome:</label>
      <input type="text" name="sobrenome" id="sobrenome" required>

      <label for="repeticoes">Número de repetições:</label>
      <input type="number" name="repeticoes" id="repeticoes" min="1" required>

      <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="../index.php">Voltar à Página Principal</a>
  </div>
</body>
</html>
