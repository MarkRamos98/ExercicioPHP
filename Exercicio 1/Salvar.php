<?php 

session_start();

$_SESSION['Pessoa'] = $_POST['pessoa'];

if ( $_SESSION['Pessoa'] == "Pessoa 1" ){

	// Caso seja o primeiro form

	$_SESSION['Nome1'] = $_POST['nome1'];
	$_SESSION['Idd1'] = $_POST['idade1'];
	$_SESSION['Peso1'] = $_POST['peso1'];
	$_SESSION['Alt1'] = $_POST['altura1'];

	header('location: Result.php');
	exit();

} else {

	// Caso seja o segundo form

	IF ($_SESSION['Idd1'] > $_POST['idade1']){

		echo $_SESSION['Nome1'] . " é mais velho que " . $_POST['nome1'] . "\n";

	} else {

		echo $_POST['nome1'] . " é mais velho que " . $_SESSION['Nome1'] . "\n";

	}

	IF ($_SESSION['Peso1'] > $_POST['peso1']){

		echo $_SESSION['Nome1'] . " é mais pesado que " . $_POST['nome1'] . "\n";

	} else {

		echo $_POST['nome1'] . " é mais velho que " . $_SESSION['Nome1'] . "\n";

	}

	IF ($_SESSION['Alt1'] > $_POST['altura1']){

		echo $_SESSION['Nome1'] . " é mais alto que " . $_POST['nome1'] . "\n";

	} else {

		echo $_POST['nome1'] . " é mais velho que " . $_SESSION['Nome1'] . "\n";

	}

}

?>