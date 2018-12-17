<?php
class docente{
	private $NombreDoc;
	private $ApellidoDoc;
	private $CorreoDoc;
	private $TelDoc;
	private $NumDoc;
	private $FechaNaDoc;
	private $CarreraDoc;
	private $ContraDoc;
	private $CentroDoc;

	public function __construct(
		$NombreDoc = null,
		$ApellidoDoc = null,
		$CorreoDoc = null,
		$TelDoc = null,
		$NumDoc = null,
		$FechaNaDoc = null,
		$CarreraDoc = null,
		$ContraDoc = null,
		$CentroDoc = null
	){
		$this->NombreDoc = $NombreDoc;
		$this->ApellidoDoc = $ApellidoDoc;
		$this->CorreoDoc = $CorreoDoc;
		$this->TelDoc = $TelDoc;
		$this->NumDoc = $NumDoc;
		$this->FechaNaDoc = $FechaNaDoc;
		$this->CarreraDoc = $CarreraDoc;
		$this->ContraDoc = $ContraDoc;
		$this->CentroDoc = $CentroDoc;
	}

	public function __toString(){
		$var = "docente{"
		."NombreDoc: ".$this->NombreDoc." , "
		."ApellidoDoc: ".$this->ApellidoDoc." , "
		."CorreoDoc: ".$this->CorreoDoc." , "
		."TelDoc: ".$this->TelDoc." , "
		."NumDoc: ".$this->NumDoc." , "
		."FechaNaDoc: ".$this->FechaNaDoc." , "
		."CarreraDoc: ".$this->CarreraDoc." , "
		."ContraDoc: ".$this->ContraDoc." , "
		."CentroDoc: ".$this->CentroDoc;
		return $var."}";
	}

	public function getNombreDoc(){
		return $this->NombreDoc;
	}

	public function setNombreDoc($NombreDoc){
		$this->NombreDoc = $NombreDoc;
	}
	public function getApellidoDoc(){
		return $this->ApellidoDoc;
	}

	public function setApellidoDoc($ApellidoDoc){
		$this->ApellidoDoc = $ApellidoDoc;
	}
	public function getCorreoDoc(){
		return $this->CorreoDoc;
	}

	public function setCorreoDoc($CorreoDoc){
		$this->CorreoDoc = $CorreoDoc;
	}
	public function getTelDoc(){
		return $this->TelDoc;
	}

	public function setTelDoc($TelDoc){
		$this->TelDoc = $TelDoc;
	}
	public function getNumDoc(){
		return $this->NumDoc;
	}

	public function setNumDoc($NumDoc){
		$this->NumDoc = $NumDoc;
	}
	public function getFechaNaDoc(){
		return $this->FechaNaDoc;
	}

	public function setFechaNaDoc($FechaNaDoc){
		$this->FechaNaDoc = $FechaNaDoc;
	}
	public function getCarreraDoc(){
		return $this->CarreraDoc;
	}

	public function setCarreraDoc($CarreraDoc){
		$this->CarreraDoc = $CarreraDoc;
	}
	public function getContraDoc(){
		return $this->ContraDoc;
	}

	public function setContraDoc($ContraDoc){
		$this->ContraDoc = $ContraDoc;
	}
	public function getCentroDoc(){
		return $this->CentroDoc;
	}

	public function setCentroDoc($CentroDoc){
		$this->CentroDoc = $CentroDoc;
    }

    /* Para guardar los jsons */

    public function registrarDocente(){
      $archivo = fopen ("../../bd-json/docentes.json","a+");
        $arreglo = array();
        $arreglo["NombreDoc"]=$this->NombreDoc;
        $arreglo["ApellidoDoc"]=$this->ApellidoDoc;
        $arreglo["CorreoDoc"]=$this->CorreoDoc;
        $arreglo["TelDoc"]=$this->TelDoc;
        $arreglo["NumDoc"]=$this->NumDoc;
        $arreglo["FechaNaDoc"]=$this->FechaNaDoc;
        $arreglo["CarreraDoc"]=$this->CarreraDoc;
        $arreglo["ContraDoc"]=$this->ContraDoc;
        $arreglo["CentroDoc"]=$this->CentroDoc;

        fwrite ($archivo, json_encode($arreglo));
        fclose ($archivo);
        return json_encode($arreglo);

	}
	
	public function registrarCredencialDocente(){
		$archivo = fopen("../../bd-json/credencialesDocentes.json","a+");  
		$arreglo = array();
		$arreglo["ContraDoc"]=$this->ContraDoc;  	
		$arreglo["NumDoc"]=$this->NumDoc;     

		
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
		return json_encode($arreglo);

	}
}
?>