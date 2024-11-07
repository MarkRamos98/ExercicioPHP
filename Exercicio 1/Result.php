<?php 

session_start();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<link rel="stylesheet" href="CSS.css">
</head>
<body>

	<form action="Salvar.php" method="post">

		<div class="Orizon"> <!--organização horizontal centro-->
			
			<div class="Cubo"> <!--quadradinho de item-->

				<label id="pessoa">Pessoa 2</label><br><br><br>


				<label for="nome">Nome:</label><br><br><br>
				<label for="Idade">Idade:</label><br><br><br>
				<label for="Peso">Peso:</label><br><br><br>
				<label for="Altura">Altura:</label>
				

			</div>

			<div class="Cubo"> <!--quadradinho de item-->

				<input type="text" name="pessoa" id="pessoa" autocomplete="off" required maxlength="10" value="Pessoa 2" readonly><br><br><br>

				<input type="text" name="nome1" id="nome1" autocomplete="off" required autofocus maxlength="30"><br><br><br>
				<input type="text" name="idade1" id="idade1" autocomplete="off" required maxlength="3"><br><br><br>
				<input type="text" name="peso1" id="peso1" autocomplete="off" required maxlength="3"><br><br><br>
				<input type="text" name="altura1" id="altura1" autocomplete="off" required maxlength="4">

			</div>
			
			<br>

		</div> 

		<div class="Orizon">

			<div class="Cubo"> <!--quadradinho de item-->

				<input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
				<input type="reset" name="Limpar" value="Limpar" class="btn btn-light">

			</div>

		</div>

	</form>

</body>
</html>