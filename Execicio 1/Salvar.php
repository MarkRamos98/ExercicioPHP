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

	IF ($_SESSION['Idd1'] > $_POST['idd1']){

		echo $_SESSION['Idd1'] . " é mais velho que " . $_POST['idd1'];

	} else {

		echo $_POST['idd1'] . " é mais velho que " . $_SESSION['Idd1'];

	}

	IF ($_SESSION['Peso1'] > $_POST['peso1']){

		echo $_SESSION['Peso1'] . " é mais pesado que " . $_POST['peso1'];

	} else {

		echo $_POST['peso1'] . " é mais velho que " . $_SESSION['Peso1'];

	}

	IF ($_SESSION['Alt1'] > $_POST['altura1']){

		echo $_SESSION['Alt1'] . " é mais alto que " . $_POST['altura1'];

	} else {

		echo $_POST['altura1'] . " é mais velho que " . $_SESSION['Alt1'];

	}

}

?>