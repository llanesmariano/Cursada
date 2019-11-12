<?php

require_once("Cuenta.php");

class Gold extends Cuenta{

    public function debitar($monto, $desdeDonde){
        if ($desdeDonde == "Link "){
            // Al balance de la cuenta le resto el monto debitado con el 5% incluido.
            return $this->balance = $this->balance - $monto * 1.05;
        } else {
            // Al balance de la cuenta le resto el monto.
            return $this->balance = $this->balance - $monto;
        }
      }

    public function acreditar ($monto){
    setFechaDeMovimiento();
    echo $this->$balance + $monto;
    }
}