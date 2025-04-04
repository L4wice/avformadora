<!-- exercicio3/form.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 3 - Cálculo de Densidade</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Exercício 3 - Densidade</h2>
    <form action="resultado.php" method="POST">
      <label for="massa">Massa (g):</label>
      <input type="number" name="massa" id="massa" step="0.01" required>

      <label for="volume">Volume (cm³):</label>
      <input type="number" name="volume" id="volume" step="0.01" required>

      <button type="submit">Calcular</button>
    </form>
    <br>
    <a href="../index.php">Voltar à Página Principal</a>
  </div>
</body>
</html>
