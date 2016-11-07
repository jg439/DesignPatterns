<?php

  include_once('Tree.php');
  include_once('TreeColorDecorator.php');
  include_once('TreeStarsDecorator.php');
  echo tagins("html");
  echo tagins("head");
  echo tagins("/head");
  echo tagins("body");


  echo "BEGIN TESTING DECORATOR PATTERN";
  echo tagins("br").tagins("br");


  $patternTree =  new Tree(" Green ","Two");

  $decorator = new TreeColorDecorator($patternTree);
  $starDecorator = new TreeStarsDecorator($decorator);

  echo "showing color : "
    .tagins("br");
  echo $decorator->showColor();
  echo tagins("br").tagins("br");

  echo 'Adding some stars to my tree: ';

  $starDecorator->starTree();
  echo $decorator->showColor();
  echo tagins("br").tagins("br");

  echo 'Christmas is over, taking the stars out of my tree: ';

     echo $decorator->resetColor();
     echo $decorator->showColor();
     echo tagins("br").tagins("br");




  echo tagins("br");
  echo "END TESTING DECORATOR PATTERN";
  echo tagins("br");

  echo tagins("/body");
  echo tagins("/html");

  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }
?>
