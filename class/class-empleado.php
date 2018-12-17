<?php
class empleado{
    private $NombreEmp;
    private $ApellidoEmp;
	private $ContraEmp;
	private $NumEmp;
	private $CorreoEmp;
    private $FechaNaEmp;
    private $PuestoEmp;

	public function __construct(
        $NombreEmp = null,
        $ApellidoEmp = null,
		$ContraEmp = null,
		$NumEmp = null,
		$CorreoEmp = null,
        $FechaNaEmp = null,
        $PuestoEmp = null
	){
        $this->NombreEmp = $NombreEmp;
        $this->ApellidoEmp = $ApellidoEmp;
		$this->ContraEmp = $ContraEmp;
		$this->NumEmp = $NumEmp;
		$this->CorreoEmp = $CorreoEmp;
        $this->FechaNaEmp = $FechaNaEmp;
        $this->PuestoEmp = $PuestoEmp;
	}

	public function __toString(){
		$var = "empleado{"
        ."NombreEmp: ".$this->NombreEmp." , "
        ."ApellidoEmp: ".$this->ApellidoEmp." , "
		."ContraEmp: ".$this->ContraEmp." , "
		."NumEmp: ".$this->NumEmp." , "
		."CorreoEmp: ".$this->CorreoEmp." , "
        ."FechaNaEmp: ".$this->FechaNaEmp." , "
        ."PuestoEmp: ".$this->PuestoEmp;
		return $var."}";
	}

	public function getNombreEmp(){
		return $this->NombreEmp;
	}

	public function setNombreEmp($NombreEmp){
		$this->NombreEmp = $NombreEmp;
    }
    
    public function getApellidoEmp(){
		return $this->NombreEmp;
	}

	public function setApellidoEmp($ApellidoEmp){
		$this->ApellidoEmp = $ApellidoEmp;
	}
	public function getContraEmp(){
		return $this->ContraEmp;
	}

	public function setContraEmp($ContraEmp){
		$this->ContraEmp = $ContraEmp;
	}
	public function getNumEmp(){
		return $this->NumEmp;
	}

	public function setNumEmp($NumEmp){
		$this->NumEmp = $NumEmp;
	}
	public function getCorreoEmp(){
		return $this->CorreoEmp;
	}

	public function setCorreoEmp($CorreoEmp){
		$this->CorreoEmp = $CorreoEmp;
	}
	public function getFechaNaEmp(){
		return $this->FechaNaEmp;
	}

	public function setFechaNaEmp($FechaNaEmp){
		$this->FechaNaEmp = $FechaNaEmp;
	}

    public function getPuestoEmp(){
		return $this->PuestoEmp;
	}

	public function setPuestoEmp($PuestoEmp){
		$this->PuestoEmp = $PuestoEmp;
	}


     public function registrarEmpleado(){
      $archivo=fopen("../../bd-json/empleado.json","a+");
      $arreglo= array() ;
     $arreglo["NombreEmp"]=$this->NombreEmp;
     $arreglo["ApellidoEmp"]=$this->ApellidoEmp;
     $arreglo["ContraEmp"]=$this->ContraEmp;
     $arreglo["NumEmp"]=$this->NumEmp;
     $arreglo["CorreoEmp"]=$this->CorreoEmp;
     $arreglo["FechaNaEmp"]=$this->FechaNaEmp;
     $arreglo["PuestoEmp"]=$this->PuestoEmp;
     
     
     fwrite($archivo, json_encode($arreglo));
     fclose($archivo);
     return json_encode ($arreglo);
	 }
	 
	 public function registrarCredencialEmpleado(){
		$archivo = fopen("../../bd-json/credencialesEmpleados.json","a+");  
		$arreglo = array();
		$arreglo["ContraEmp"]=$this->ContraEmp;  	
		$arreglo["NumEmp"]=$this->NumEmp;     

		
		fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
		return json_encode($arreglo);

	}
}
?>