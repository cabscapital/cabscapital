<?php

class UserCabsCapital {

 private $idUser;
 private $nombres;
 private $apellidos;
 private $fechaNacimiento;
 private $pais;
 private $ciudad;
 private $referente;
 private $email;
 private $password;
 private $estado;
 private $tipo;


	function setUser($cp1,$cp2,$cp3,$cp4,$cp5,$cp6,$cp7,$cp8,$cp9,$cp10,$cp11) 
	{
		$this->idUser = $cp1;
		$this->nombres  = $cp2;
		$this->apellidos = $cp3;
		$this->fechaNacimiento = $cp4;
		$this->pais = $cp5;
		$this->ciudad = $cp6;
		$this->referente = $cp7;
		$this->email = $cp8;
		$this->password = $cp9;
		$this->estado = $cp10;
		$this->tipo = $cp11;
	}

	function getIdUser() 
	{
	 return $this->idUser;
	}


	function getNombres() 
	{
	 return $this->nombres;
	}

	function getApellidos() 
	{
	 return $this->apellidos;
	}

	function getFechaNacimiento() 
	{
	 return $this->fechaNacimiento;
	}   
	function getPais() 
	{
	 return $this->pais;
	}
	function getCiudad() 
	{
	 return $this->ciudad;
	}
	function getReferente() 
	{
	 return $this->referente;
	}
	function getEmail() 
	{
	 return $this->email;
	}
	function getPassword() 
	{
	 return $this->password;
	}
	function getEstado() 
	{
	 return $this->estado;
	}
	function getTipo() 
	{
	 return $this->tipo;
	}
} 	

?>