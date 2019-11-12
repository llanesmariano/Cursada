<?php

require_once("Cuenta.php");

class Black extends Cuenta{

    public function debitar($monto, $desdeDonde){}

    public function acreditar ($monto){
        setFechaDeMovimiento();
        echo $this->$balance + $monto;
    }
  
    
    
}