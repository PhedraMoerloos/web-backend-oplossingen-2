<?php

/**
 *
 */
class Lion extends Animal
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

//voor de leeuwen wordt de doSpecialMove functie van Animal overschreven
  public function doSpecialMove() {

    return 'roar';

  }


}



 ?>
