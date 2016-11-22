<?php

/**
 *
 */
class Zebra extends Animal
{

  protected $species;



  public function __construct($name, $gender, $health, $species)
  {

      parent::__construct( $name, $gender, $health );

      $this->species  =   $species;

  }

  public function getSpecies(){

    return $this->species;

  }

//voor de Zebra's geen special move --> gaan dus die van Animal te zien krijgen als we er een opvragen



}



 ?>
