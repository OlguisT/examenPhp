<?php

include_once('Moneda.php');
include_once('../Collector.php');

class MonedaCollector extends Collector
{  


function showMonedas() {
   $rows = self::$db->getRows("SELECT * FROM moneda");       
   $arrayCiudad= array();        
    foreach ($rows as $c){
      $aux = new Moneda($c{'idmoneda'},$c{'nombre'});
      array_push($arrayCiudad, $aux);
    }
    return $arrayCiudad;        
  }



function insertMoneda($nombre) {
  $rows = self::$db->insertRow("INSERT INTO public.ciudad(nombre) VALUES (?,?)", array ("{$nombre}"));             
}

}
?>

