<?php

require_once("Cliente.php");


class Multinacional extends Cliente {

    //Atributos   
    Private $cuit;
    Private $razonSocial;

    //Metodos

    public function __construct($cuit, $razonSocial){
        $this->cuit = $cuit;
        $this->razonSocial = $razonSocial;
    }

      public function setCuit($cuit){
        $this->cuit = $cuit;
      }
      public function getCuit(){
        return $this->cuit;
      }
      public function setRazonSocial($razonSocial){
        $this->razonSocial = $razonSocial;
      }
      public function getRazonSocial(){
        return $this->razonSocial;
      }


    
}