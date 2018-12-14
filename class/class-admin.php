<?php
class Admin{
	private $NumeroEmpleado;
	private $Nombres;
	private $Apellidos;
	private $NumeroID;
	private $correo;
	private $FechaNacimiento;
	private $Contrasena;
	private $TipoUsuario;

	public function __construct(
		$NumeroEmpleado = null,
		$Nombres = null,
		$Apellidos = null,
		$NumeroID = null,
		$correo = null,
		$FechaNacimiento = null,
		$Contrasena = null,
		$TipoUsuario = null
	){
		$this->NumeroEmpleado = $NumeroEmpleado;
		$this->Nombres = $Nombres;
		$this->Apellidos = $Apellidos;
		$this->NumeroID = $NumeroID;
		$this->correo = $correo;
		$this->FechaNacimiento = $FechaNacimiento;
		$this->Contrasena = $Contrasena;
		$this->TipoUsuario = $TipoUsuario;
	}

	public function __toString(){
		$var = "Admin{"
		."NumeroEmpleado: ".$this->NumeroEmpleado." , "
		."Nombres: ".$this->Nombres." , "
		."Apellidos: ".$this->Apellidos." , "
		."NumeroID: ".$this->NumeroID." , "
		."correo: ".$this->correo." , "
		."FechaNacimiento: ".$this->FechaNacimiento." , "
		."Contrasena: ".$this->Contrasena." , "
		."TipoUsuario: ".$this->TipoUsuario;
		return $var."}";
	}

	public function getNumeroEmpleado(){
		return $this->NumeroEmpleado;
	}

	public function setNumeroEmpleado($NumeroEmpleado){
		$this->NumeroEmpleado = $NumeroEmpleado;
	}
	public function getNombres(){
		return $this->Nombres;
	}

	public function setNombres($Nombres){
		$this->Nombres = $Nombres;
	}
	public function getApellidos(){
		return $this->Apellidos;
	}

	public function setApellidos($Apellidos){
		$this->Apellidos = $Apellidos;
	}
	public function getNumeroID(){
		return $this->NumeroID;
	}

	public function setNumeroID($NumeroID){
		$this->NumeroID = $NumeroID;
	}
	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}
	public function getFechaNacimiento(){
		return $this->FechaNacimiento;
	}

	public function setFechaNacimiento($FechaNacimiento){
		$this->FechaNacimiento = $FechaNacimiento;
	}
	public function getContrasena(){
		return $this->Contrasena;
	}

	public function setContrasena($Contrasena){
		$this->Contrasena = $Contrasena;
	}
	public function getTipoUsuario(){
		return $this->TipoUsuario;
	}

	public function setTipoUsuario($TipoUsuario){
		$this->TipoUsuario = $TipoUsuario;
	}

	public function registrarAdmin(){
		$archivo = fopen("../../bd-json/admins.json","a+");  
		$arreglo = array();
		$arreglo["NumeroEmpleado"]=$this->NumeroEmpleado;
		$arreglo["Nombres"]=$this->Nombres; 
		$arreglo["Apellidos"]=$this->Apellidos; 
		$arreglo["NumeroID"]=$this->NumeroID; 
		$arreglo["correo"]=$this->correo; 
		$arreglo["FechaNacimiento"]=$this->FechaNacimiento; 	
		$arreglo["TipoUsuario"]=$this->TipoUsuario; 	
				
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
		return json_encode($arreglo);
	}

	public function registrarCredencialAdmin(){
		$archivo = fopen("../../bd-json/credencialesAdmin.json","a+");  
		$arreglo = array();
		$arreglo["Contrasena"]=$this->Contrasena; 
		$arreglo["NumeroEmpleado"]=$this->NumeroEmpleado;
	    

		
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
		return json_encode($arreglo);

	}
}
?>