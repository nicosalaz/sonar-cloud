<?php 

	require_once 'Contacto.php';
	require_once 'Agenda.php';

	$c1 = new Contacto("Vanessa",3187126358);
	$c2 = new Contacto("nicolas", 3014868726);
	$lista = new Agenda();
	$lista->registrarContacto($c1);
	$lista->registrarContacto($c2);
	$lista->listarContactos();
	echo $lista->buscarContacto("nicolas");

 ?>