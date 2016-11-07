<?php
include_once('TreeColorDecorator.php');

   class TreeStarsDecorator extends TreeColorDecorator {

      private $btd;


   public function __construct(TreeColorDecorator $btd_in) {
   $this->btd = $btd_in;
   }


   function starTree() {
   $this->btd->color = Str_replace(" ","*",$this->btd->color);
 }


 }


  ?>
