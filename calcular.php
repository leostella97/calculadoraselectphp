<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Resultado</title>
</head>
<body>
<?php

	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$tipo = $_POST['tipo'];

		switch($tipo)
		{
			case 'Somar': $resultado = $valor1 + $valor2; break;
			case 'Subtrair': $resultado = $valor1 - $valor2; break;
			case 'Multiplicar': $resultado = $valor1 *$valor2; break;
			case 'Dividir': $resultado = $valor1 / $valor2; break;
		}
		echo $resultado;

?>
<div class="text-center"><p class="display-1"><?php echo $resultado; ?></p>
<input type="button" value="Voltar" onClick="history.go(-1)"> </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>