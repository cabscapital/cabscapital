<?php

class NewEmail {

 private $name;
 private $email;
 private $message;

	function setNewEmail($cp1,$cp2,$cp3) 
	{
	  $this->name = $cp1;
	  $this->email = $cp2;
	  $this->message = $cp3;  
	}

	function getName() 
	{
	 return $this->name;
	}

	function getEmail() 
	{
	 return $this->email;
	}

	function getMessage() 
	{
	 return $this->message;
	}   
} 	

?>