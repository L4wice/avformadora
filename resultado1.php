<!-- exercicio1/resultado.php -->
<?php
$nome = htmlspecialchars($_POST['nome']);
$sobrenome = htmlspecialchars($_POST['sobrenome']);
$repeticoes = intval($_POST['repeticoes']);

$resultado = [];
for ($i = 0; $i < $repeticoes; $i++) {
  $resultado[] = ($i % 2 === 0) ? $nome : $sobrenome;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado - Exercício 1</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Resultado da Repetição</h2>
    <p>
      <?php echo implode(' ', $resultado); ?>
    </p>
    <br>
    <a href="form.php">Voltar</a> |
    <a href="../index.php">Página Principal</a>
  </div>
</body>
</html>
