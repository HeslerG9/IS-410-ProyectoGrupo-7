<?php
class Carrera{
	private $codigoCarrera;
	private $codigoCE;
	private $nombreCarrera;
	private $codigoFacultad;
	private $codigoDepartamento;
	private $cantidadAsignaturas;
	private $cantidadUv;
	private $grado;

	public function __construct(
		$codigoCarrera,
		$codigoCE,
		$nombreCarrera,
		$codigoFacultad,
		$codigoDepartamento,
		$cantidadAsignaturas,
		$cantidadUv,
		$grado){
		$this->codigoCarrera = $codigoCarrera;
		$this->codigoCE = $codigoCE;
		$this->nombreCarrera = $nombreCarrera;
		$this->codigoFacultad = $codigoFacultad;
		$this->codigoDepartamento = $codigoDepartamento;
		$this->cantidadAsignaturas = $cantidadAsignaturas;
		$this->cantidadUv = $cantidadUv;
		$this->grado = $grado;
	}

	public function __toString(){
		$var = "Carrera{"
		."codigoCarrera: ".$this->codigoCarrera." , "
		."codigoCE: ".$this->codigoCE." , "
		."nombreCarrera: ".$this->nombreCarrera." , "
		."codigoFacultad: ".$this->codigoFacultad." , "
		."codigoDepartamento: ".$this->codigoDepartamento." , "
		."cantidadAsignaturas: ".$this->cantidadAsignaturas." , "
		."cantidadUv: ".$this->cantidadUv." , "
		."grado: ".$this->grado;
		return $var."}";
	}

	public function getCodigoCarrera(){
		return $this->codigoCarrera;
	}

	public function setCodigoCarrera($codigoCarrera){
		$this->codigoCarrera = $codigoCarrera;
	}
	public function getCodigoCE(){
		return $this->codigoCE;
	}

	public function setCodigoCE($codigoCE){
		$this->codigoCE = $codigoCE;
	}
	public function getNombreCarrera(){
		return $this->nombreCarrera;
	}

	public function setNombreCarrera($nombreCarrera){
		$this->nombreCarrera = $nombreCarrera;
	}
	public function getCodigoFacultad(){
		return $this->codigoFacultad;
	}

	public function setCodigoFacultad($codigoFacultad){
		$this->codigoFacultad = $codigoFacultad;
	}
	public function getCodigoDepartamento(){
		return $this->codigoDepartamento;
	}

	public function setCodigoDepartamento($codigoDepartamento){
		$this->codigoDepartamento = $codigoDepartamento;
	}
	public function getCantidadAsignaturas(){
		return $this->cantidadAsignaturas;
	}

	public function setCantidadAsignaturas($cantidadAsignaturas){
		$this->cantidadAsignaturas = $cantidadAsignaturas;
	}
	public function getCantidadUv(){
		return $this->cantidadUv;
	}

	public function setCantidadUv($cantidadUv){
		$this->cantidadUv = $cantidadUv;
	}
	public function getGrado(){
		return $this->grado;
	}

	public function setGrado($grado){
		$this->grado = $grado;
	}
	
	
	public function registrarCarrera(){
		$archivo = fopen("../../bd-json/carrera.json","a+");  
		$arreglo = array();
		$arreglo["codigoCarrera"]=$this->codigoCarrera;
		$arreglo["codigoCE"]=$this->codigoCE; 
		$arreglo["nombreCarrera"]=$this->nombreCarrera; 
		$arreglo["codigoFacultad"]=$this->codigoFacultad; 
		$arreglo["codigoDepartamento"]=$this->codigoDepartamento; 
		$arreglo["cantidadAsignaturas"]=$this->cantidadAsignaturas; 
		$arreglo["cantidadUv"]=$this->cantidadUv; 
		$arreglo["grado"]=$this->grado;     
				
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
		return json_encode($arreglo);
    }

}

?>
