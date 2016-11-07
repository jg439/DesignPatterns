<?php

  include_once('PatternSubject.php');
  include_once('PatternObserver.php');

  echo 'BEGIN TESTING OBSERVER PATTERN'.BR;
  echo BR;


  $patternNews = new PatternSubject();
  $patternNewsReader= new PatternObserver();
  $patternNews->attach($patternNewsReader);


  $patternNews->updateNews('Presidential Elections, Iraq War, Market Crash');


  $patternNews->updateNews('Corporate Profits, CO2 Crisis, DeBeers');
  $patternNews->detach($patternNewsReader);


  echo BR.BR;
  echo 'END TESTING OBSERVER PATTERN'.BR;
?>
