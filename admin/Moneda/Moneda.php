<?php

class Moneda
{
    private $idmoneda;
    private $nombre;
    private $id_ciudad_fk; 
    
    
     function __construct($idmoneda, $nombre,$id_ciudad_fk) {
       $this->idmoneda = $idmoneda;
       $this->nombre = $nombre;
       $this->id_ciudad_fk = $id_ciudad_fk;      
     }
   
    
     function setIdMoneda($idmoneda){
       $this->idmoneda = $idmoneda;
     } 
     function getIdMoneda(){
       return $this->idMoneda;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     
     function setId_ciudad_fk($id_ciudad_fk){
       $this->id_ciudad_fk =$id_ciudad_fk;
     } 
     function getId_ciudad_fk(){
       return $this->id_ciudad_fk;
     } 
}

?> 
