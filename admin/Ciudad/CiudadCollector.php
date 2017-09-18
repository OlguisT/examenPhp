<?php

include_once('Ciudad.php');
include_once('../Collector.php');

class CiudadCollector extends Collector
{
  
function showCiudades() {
   $rows = self::$db->getRows("SELECT * FROM ciudad");       
   $arrayCiudad= array();        
    foreach ($rows as $c){
      $aux = new Ciudad($c{'idciudad'},$c{'nombre'},$c{'idprovincia'},$c{'numhab'});
      array_push($arrayCiudad, $aux);
    }
    return $arrayCiudad;        
  }

function showCiudad($id) {
$rows = self::$db->getRows("SELECT * FROM ciudad where idciudad= ? ", array ("{$id}"));        
$ObjCiudad= new Ciudad($rows[0]{'idciudad'},$rows[0]{'nombre'},$rows[0]{'idprovincia'},$rows[0]{'numhab'});
  return $ObjCiudad;        
}

function updateCiudad($id,$nombre,$idprovincia,$numhab) {
 $insertrow = self::$db->updateRow("UPDATE public.ciudad SET nombre= ?, idprovincia= ?, numhab= ? where idciudad= ? ", array ("{$nombre}","{$idprovincia}","{$numhab}",$id));

}

function deleteCiudad($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.ciudad where idciudad= ? ", array ("{$id}"));
}

function insertCiudad($nombre,$idprovincia,$numhab) {
  $rows = self::$db->insertRow("INSERT INTO public.ciudad(nombre,idprovincia,numhab) VALUES (?,?,?)", array ("{$nombre}","{$idprovincia}","{$numhab}"));             
}

}
?>

