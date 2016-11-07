<?php
  include_once('AbstractObserver.php');
  include_once('PatternSubject.php');

  define('BR', '<'.'BR'.'>');


  class PatternObserver extends AbstractObserver {


    public function __construct() {
    }


    public function update(AbstractSubject $subject) {
      echo BR.BR;
      echo '*IN PATTERN OBSERVER - NEWS ALERT*'.BR;
      echo ' Upcoming News: '.$subject->getNews().BR;
      echo '* NEWS ALERT OVER*'.BR;
    }


  }

?>
