<?php

	class Contacto
	{
		private $nombre;
		private $numero;

		function __construct($nombre = "",$numero = 0)
		{
			$this->nombre = $nombre;
			$this->numero = $numero;
		}
		public function getNombre()
		{
			return $this->nombre;
		}
		public function setNombre($nom)
		{
			$this->nombre = $nom;
		}

		public function getNumero()
		{
			return $this->numero;
		}
		public function setNumero($num)
		{
			$this->numero = $num;
		}
		
	}




 ?>