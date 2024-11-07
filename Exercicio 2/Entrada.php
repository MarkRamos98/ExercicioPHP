<?php 

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bem vindo</title>
	<link rel="stylesheet" href="CSS.css">
</head>
<body>

	<form action="Pontuação.php" method="post">

		<div class="Orizon"> <!--organização horizontal centro-->
			
			<div class="Cubo"> <!--Lables-->

				<label for="nome">Registre seu nome:</label><br><br><br>

			</div>

			<div class="Cubo"> <!--Text boxes-->

				<input type="text" name="nome1" id="nome1" autocomplete="off" required autofocus maxlength="30"><br><br><br>

			</div>
			
			<br>

		</div> 

		<div class="Orizon">

			<div class="Cubo"> <!--Botões-->

				<input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
				<input type="reset" name="Limpar" value="Limpar" class="btn btn-light">

			</div>

		</div>

	</form>

</body>
</html>