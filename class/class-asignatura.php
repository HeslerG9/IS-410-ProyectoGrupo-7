<?php
class Asignatura{
	private $seccion;
	private $HoraInicio;
	private $HoraFinal;
	private $Dias;
	private $Cupos;
	private $Aula;
	private $Asignatura;
	private $Maestro;

	public function __construct(
		$seccion = null,
		$HoraInicio = null,
		$HoraFinal = null,
		$Dias = null,
		$Cupos = null,
		$Aula = null,
		$Asignatura = null,
		$Maestro = null
	){
		$this->seccion = $seccion;
		$this->HoraInicio = $HoraInicio;
		$this->HoraFinal = $HoraFinal;
		$this->Dias = $Dias;
		$this->Cupos = $Cupos;
		$this->Aula = $Aula;
		$this->Asignatura = $Asignatura;
		$this->Maestro = $Maestro;
	}

	public function __toString(){
		$var = "Asignatura{"
		."seccion: ".$this->seccion." , "
		."HoraInicio: ".$this->HoraInicio." , "
		."HoraFinal: ".$this->HoraFinal." , "
		."Dias: ".$this->Dias." , "
		."Cupos: ".$this->Cupos." , "
		."Aula: ".$this->Aula." , "
		."Asignatura: ".$this->Asignatura." , "
		."Maestro: ".$this->Maestro;
		return $var."}";
	}

	public function getSeccion(){
		return $this->seccion;
	}

	public function setSeccion($seccion){
		$this->seccion = $seccion;
	}
	public function getHoraInicio(){
		return $this->HoraInicio;
	}

	public function setHoraInicio($HoraInicio){
		$this->HoraInicio = $HoraInicio;
	}
	public function getHoraFinal(){
		return $this->HoraFinal;
	}

	public function setHoraFinal($HoraFinal){
		$this->HoraFinal = $HoraFinal;
	}
	public function getDias(){
		return $this->Dias;
	}

	public function setDias($Dias){
		$this->Dias = $Dias;
	}
	public function getCupos(){
		return $this->Cupos;
	}

	public function setCupos($Cupos){
		$this->Cupos = $Cupos;
	}
	public function getAula(){
		return $this->Aula;
	}

	public function setAula($Aula){
		$this->Aula = $Aula;
	}
	public function getAsignatura(){
		return $this->Asignatura;
	}

	public function setAsignatura($Asignatura){
		$this->Asignatura = $Asignatura;
	}
	public function getMaestro(){
		return $this->Maestro;
	}

	public function setMaestro($Maestro){
		$this->Maestro = $Maestro;
    }
    
    public function registrarAsignatura(){
		$archivo = fopen("../../bd-json/asignatura.json","a+");  
		$arreglo = array();
		$arreglo["seccion"]=$this->seccion;
		$arreglo["HoraInicio"]=$this->HoraInicio; 
		$arreglo["HoraFinal"]=$this->HoraFinal; 
		$arreglo["Dias"]=$this->Dias; 
		$arreglo["Cupos"]=$this->Cupos; 
		$arreglo["Aula"]=$this->Aula; 
		$arreglo["Asignatura"]=$this->Asignatura; 
		$arreglo["Maestro"]=$this->Maestro;     
				
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
        return json_encode($arreglo);
        
    }
}
?>