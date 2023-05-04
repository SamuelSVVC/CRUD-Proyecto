<?php

class Edificio {
  protected $direccion;
  protected $num_pisos;
  protected $num_departamentos;

  public function __construct($direccion, $num_pisos, $num_departamento,) {
    $this->direccion = $direccion;
    $this->num_pisos = $num_pisos;
    $this->num_departamentos = $num_departamento;
  }

  public function obtenerDireccion() {
    return $this->direccion;
  }

  public function obtenerNumPisos() {
    return $this->num_pisos;
  }

  public function obtenerNumDepartamento() {
    return $this->num_departamentos;
  }

  public function cambiarDireccion($nuevaDireccion) {
    $this->direccion = $nuevaDireccion;
  }

  public function cambiarNumPisos($nuevoNumPisos) {
    $this->num_pisos = $nuevoNumPisos;
  }

  public function cambiarNumDepartamentos($nuevoNumDepartamentos) {
    $this->num_departamentos = $nuevoNumDepartamentos;
  }

}