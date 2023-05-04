<?php

require_once('edificio.php');

class Apartamento extends Edificio {
  protected $num_habitaciones;
  protected $num_banos;

  public function __construct($direccion, $num_pisos, $num_departamento, $num_habitaciones, $num_banos) {
    parent::__construct($direccion, $num_pisos, $num_departamento,);
    $this->num_habitaciones = $num_habitaciones;
    $this->num_banos = $num_banos;
  }

  public function obtenerNumHabitaciones() {
    return $this->num_habitaciones;
  }

  public function obtenerNumBanos() {
    return $this->num_banos;
  }

  public function cambiarNumHabitaciones($nuevoNumHabitaciones) {
    $this->num_habitaciones = $nuevoNumHabitaciones;
  }

  public function cambiarNumBanos($nuevoNumBanos) {
    $this->num_banos = $nuevoNumBanos;
  }
}
