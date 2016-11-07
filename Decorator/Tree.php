<?php

class Tree {
    private $color;
    private $year;
    function __construct($color_in, $year_in) {
        $this->color = $color_in;
        $this->year  = $year_in;
    }
    function getColor() {
        return $this->color;
    }
    function getYear() {
        return $this->year;
    }
    function getColorAndYear() {
      return  'the color of the tree is '. $this->getColor().'and it has '.$this->getYear(). ' years';
    }
}

?>
