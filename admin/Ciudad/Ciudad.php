<?php

class Ciudad
{
    private $idciudad;
    private $nombre;
    private $idprovincia; 
    private $numhab; 
    
     function __construct($idciudad, $nombre,$idprovincia,$numhab) {
       $this->idciudad = $idciudad;
       $this->nombre = $nombre;
       $this->idprovincia = $idprovincia;  
       $this->numhab= $numhab;   
     }
     
     
     function setIdCiudad($idciudad){
       $this->idciudad = $idciudad;
     } 
     function getIdCiudad(){
       return $this->idciudad;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     
     function setIdProvincia($idprovincia){
       $this->idprovincia =$idprovincia;
     } 

     function getIdProvincia(){
       return $this->idprovincia;
     } 

     function setNumHab($numhab){
       $this->numhab=$numhab;
     } 

     function getNumHab(){
       return $this->numhab;
     } 
     
}

?> 
