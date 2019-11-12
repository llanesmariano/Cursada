<?php

require_once("Cuenta.php");

class Platinum extends Cuenta{

    public function debitar($monto, $desdeDonde){
        if ($this->balance < 5000){
            // le resto el monto con el 5% incluido si en el balance tiene $5000 o mas.
            return $this->balance = $this->balance - $monto * 1.05;
        } else {
            return $this->balance = $this->balance - $monto;
        }
      }

    // public function acreditar ($monto){
    // setFechaDeMovimiento();
    // echo $this->$balance + $monto;
    // }


}


// public function __construct($cbu, $balance, $fechaDeUltimoMovimiento){


$prueba = new Platinum(55484, 4999, "12/10/2353");


var_dump($prueba);


$prueba->debitar(5,"Link");

var_dump($prueba);

