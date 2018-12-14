<?php
class aula{
	private $edificio;
	private $NumeroAula;

	public function __construct(
		$edificio = null,
		$NumeroAula = null
	){
		$this->edificio = $edificio;
		$this->NumeroAula = $NumeroAula;
	}

	public function __toString(){
		$var = "aula{"
		."edificio: ".$this->edificio." , "
		."NumeroAula: ".$this->NumeroAula;
		return $var."}";
	}

	public function getEdificio(){
		return $this->edificio;
	}

	public function setEdificio($edificio){
		$this->edificio = $edificio;
	}
	public function getNumeroAula(){
		return $this->NumeroAula;
	}

	public function setNumeroAula($NumeroAula){
		$this->NumeroAula = $NumeroAula;
	}

    public function registrarAula(){
       $archivo = fopen("../../bd-json/aulas.json","a+");
       $arreglo = array();
       $arreglo["edificio"]=$this->edificio;
       $arreglo["NumeroAula"]=$this->NumeroAula;

        fwrite($archivo, json_encode($arreglo) . "\n");
		fclose($archivo);
        return json_encode($arreglo);

    }

}
?>