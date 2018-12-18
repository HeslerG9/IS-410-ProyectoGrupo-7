<?php$url = $GET['Asignatura']; //this variable get an address like autocaricateeea\/RENAULT MEGANE31072013-024103\/index.html

$file = file_get_contents('../../bd-json/clasesSis.json');
$data = json_decode($file);
unset($file);//prevent memory leaks for large json.
//insert data here
$i=0;
foreach($data as $element) {
   //check the property of every element
   if($url == $element->Asignatura){
      unset($data[$i]);
      echo ("elemento borrado");
   }
   $i++;
}

//save the file
file_put_contents('../../bd-json/clasesSis.json',json_encode($data));
unset($data);//release memory
?>