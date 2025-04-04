<!-- exercicio3/resultado.php -->
<?php
$massa = floatval($_POST['massa']);
$volume = floatval($_POST['volume']);

$densidade = $massa / $volume;
$classificacao = ($densidade > 1) ? "Afunda" : "Flutua";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado - Exercício 3</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Resultado do Cálculo de Densidade</h2>
    <p><strong>Densidade:</strong> <?php echo number_format($densidade, 2); ?> g/cm³</p>
    <p><strong>Classificação:</strong> <?php echo $classificacao; ?></p>
    <br>
    <a href="form.php">Calcular Novamente</a> |
    <a href="../index.php">Página Principal</a>
  </div>
</body>
</html>
