<?php
include_once('Tree.php');


   class TreeColorDecorator {

   protected $tree;
   protected $color;

   public function __construct(Tree $tree_in) {
   $this->tree = $tree_in;
     $this->resetColor();
   }

   //doing this so original object is not altered
 function resetColor() {
   $this->color = $this->tree->getColor();
 }


   function showColor() {
   return $this->color;
 }


 }

?>
