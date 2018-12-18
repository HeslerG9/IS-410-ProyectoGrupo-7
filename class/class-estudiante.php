<?php
class estudiante{
	private $NombreAlumno;
	private $ApellidoAlumno;
	private $CorreoAlumno;
	private $TelAlumno;
	private $ContraAlumno;
	private $NumCta;
	private $FechaIngreso;
	private $FechaNac;
	private $CentroEstudio;
	private $Carrera;

	public function __construct(
		$NombreAlumno = null,
		$ApellidoAlumno = null,
		$CorreoAlumno = null,
		$TelAlumno = null,
		$ContraAlumno = null,
		$NumCta = null,
		$FechaIngreso = null,
		$FechaNac = null,
		$CentroEstudio = null,
		$Carrera = null
	){
		$this->NombreAlumno = $NombreAlumno;
		$this->ApellidoAlumno = $ApellidoAlumno;
		$this->CorreoAlumno = $CorreoAlumno;
		$this->TelAlumno = $TelAlumno;
		$this->ContraAlumno = $ContraAlumno;
		$this->NumCta = $NumCta;
		$this->FechaIngreso = $FechaIngreso;
		$this->FechaNac = $FechaNac;
		$this->CentroEstudio = $CentroEstudio;
		$this->Carrera = $Carrera;
	}

	public function __toString(){
		$var = "estudiante{"
		."NombreAlumno: ".$this->NombreAlumno." , "
		."ApellidoAlumno: ".$this->ApellidoAlumno." , "
		."CorreoAlumno: ".$this->CorreoAlumno." , "
		."TelAlumno: ".$this->TelAlumno." , "
		."ContraAlumno: ".$this->ContraAlumno." , "
		."NumCta: ".$this->NumCta." , "
		."FechaIngreso: ".$this->FechaIngreso." , "
		."FechaNac: ".$this->FechaNac." , "
		."CentroEstudio: ".$this->CentroEstudio." , "
		."Carrera: ".$this->Carrera;
		return $var."}";
	}

	public function getNombreAlumno(){
		return $this->NombreAlumno;
	}

	public function setNombreAlumno($NombreAlumno){
		$this->NombreAlumno = $NombreAlumno;
	}
	public function getApellidoAlumno(){
		return $this->ApellidoAlumno;
	}

	public function setApellidoAlumno($ApellidoAlumno){
		$this->ApellidoAlumno = $ApellidoAlumno;
	}
	public function getCorreoAlumno(){
		return $this->CorreoAlumno;
	}

	public function setCorreoAlumno($CorreoAlumno){
		$this->CorreoAlumno = $CorreoAlumno;
	}
	public function getTelAlumno(){
		return $this->TelAlumno;
	}

	public function setTelAlumno($TelAlumno){
		$this->TelAlumno = $TelAlumno;
	}
	public function getContraAlumno(){
		return $this->ContraAlumno;
	}

	public function setContraAlumno($ContraAlumno){
		$this->ContraAlumno = $ContraAlumno;
	}
	public function getNumCta(){
		return $this->NumCta;
	}

	public function setNumCta($NumCta){
		$this->NumCta = $NumCta;
	}
	public function getFechaIngreso(){
		return $this->FechaIngreso;
	}

	public function setFechaIngreso($FechaIngreso){
		$this->FechaIngreso = $FechaIngreso;
	}
	public function getFechaNac(){
		return $this->FechaNac;
	}

	public function setFechaNac($FechaNac){
		$this->FechaNac = $FechaNac;
	}
	public function getCentroEstudio(){
		return $this->CentroEstudio;
	}

	public function setCentroEstudio($CentroEstudio){
		$this->CentroEstudio = $CentroEstudio;
	}
	public function getCarrera(){
		return $this->Carrera;
	}

	public function setCarrera($Carrera){
		$this->Carrera = $Carrera;
	}
	
	public function registrarEstudiante(){
		$archivo = fopen("../../bd-json/estudiantes.json","a+");  
		$arreglo = array();
		$arreglo["NombreAlumno"]=$this->NombreAlumno;
		$arreglo["ApellidoAlumno"]=$this->ApellidoAlumno;
		$arreglo["ContraAlumno"]=$this->ContraAlumno;
		$arreglo["CorreoAlumno"]=$this->CorreoAlumno;
		$arreglo["TelAlumno"]=$this->TelAlumno;
		$arreglo["FechaNac"]=$this->FechaNac; 
		$arreglo["CentroEstudio"]=$this->CentroEstudio; 
		$arreglo["FechaIngreso"]=$this->FechaIngreso; 	
		$arreglo["NumCta"]=$this->NumCta;  
		$arreglo["Carrera"]=$this->Carrera;   
				
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
		return json_encode($arreglo);
	}

	public function registrarCredencialEstudiante(){
		$archivo = fopen("../../bd-json/credencialesEstudiantes.json","a+");  
		$arreglo = array();
		$arreglo["ContraAlumno"]=$this->ContraAlumno;  	
		$arreglo["NumCta"]=$this->NumCta;
		$arreglo["Carrera"]=$this->Carrera;       

		
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
		return json_encode($arreglo);

	}
}

?>