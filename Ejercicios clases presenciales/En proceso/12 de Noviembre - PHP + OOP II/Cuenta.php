<?php


abstract class Cuenta {

    protected $cbu;
    protected $balance;
    protected $fechaDeUltimoMovimiento;


    public function __construct($cbu, $balance, $fechaDeUltimoMovimiento){
        $this->cbu = $cbu;
        $this->balance = $balance;
        $this->fechaDeUltimoMovimiento = $fechaDeUltimoMovimiento;
    }


    public function setCbu($cbu){
        $this->cbu = $cbu;
      }
      public function getCbu(){
        return $this->cbu;
      }
      public function setBalance($balance){
        $this->balance = $balance;
      } 
      public function getBalance(){
        return $this->balance;
      }
      public function setFechaDeMovimiento($fechaDeUltimoMovimiento){
        $this->fechaDeUltimoMovimiento = $fechaDeUltimoMovimiento;
      }
      public function getFechaDeMovimiento(){
        return $this->fechaDeUltimoMovimiento;
      }


      public abstract function debitar($monto, $desdeDonde);

      public function acreditar ($monto){
        setFechaDeMovimiento();
        echo $this->$balance + $monto;
      }





}