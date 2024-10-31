<?php 

session_start();

$_SESSION['Pessoa'] = $_POST['pessoa'];

if( $_SESSION['Pessoa'] == "Pessoa 1" ){

	$_SESSION['Nome1'] = $_POST['nome1'];
	$_SESSION['Idd1'] = $_POST['idade1'];
	$_SESSION['Peso1'] = $_POST['peso1'];
	$_SESSION['Alt1'] = $_POST['altura1'];

}

?>