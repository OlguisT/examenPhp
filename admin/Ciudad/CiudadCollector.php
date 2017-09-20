<?php

include_once('Ciudad.php');
include_once('../Collector.php');

class CiudadCollector extends Collector
{
  
function showCiudades() {
   $rows = self::$db->getRows("SELECT * FROM ciudad");       
   $arrayCiudad= array();        
    foreach ($rows as $c){
      $aux = new Ciudad($c{'idciudad'},$c{'nombre'});
      array_push($arrayCiudad, $aux);
    }
    return $arrayCiudad;        
  }

function showCiudad($id) {
$rows = self::$db->getRows("SELECT * FROM ciudad where idciudad= ? ", array ("{$id}"));        
$ObjCiudad= new Ciudad($rows[0]{'idciudad'},$rows[0]{'nombre'});
  return $ObjCiudad;        
}

function updateCiudad($id,$nombre) {
 $insertrow = self::$db->updateRow("UPDATE public.ciudad SET nombre= ? where idciudad= ? ", array ("{$nombre}",$id));

}

function deleteCiudad($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.ciudad where idciudad= ? ", array ("{$id}"));
}

function insertCiudad($nombre) {
  $rows = self::$db->insertRow("INSERT INTO public.ciudad(nombre) VALUES (?,?)", array ("{$nombre}"));             
}

}
?>

