<?php

  /**
   * klasse die berekent hoeveel procent een getal is gebaseerd op een eenheid
   * bv. hoeveel procent is 150 van 100(=eenheid)? -> 150 delen door 100 -> 1.5
   */
  class Percent
  {

    public $absolute;
    public $relative;
    public $hundred;
    public $nominal;

    public function __construct( $new, $unit )
    {

        $this->absolute    =   $new / $unit;
        $this->absolute    =   $this->FormatNumber($this->absolute);

        $this->relative    =   $this->absolute - 1;
        $this->relative    =   $this->FormatNumber($this->relative);

        $this->hundred     =   $this->relative * 100;
        $this->hundred     =   $this->FormatNumber($this->hundred);

        if ($this->absolute > 1) {

          $this->nominal   =   'positive';

        }

        elseif ($this->absolute = 1) {

          $this->nominal   =   'status-quo';

        }

        elseif ($this->absolute < 1) {

          $this->nominal   =   'negative';

        }


    }


    public function FormatNumber($number) {

      return number_format($number, 2, ',', ' ');

    }


  }






 ?>
