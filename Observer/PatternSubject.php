<?php

  include_once('AbstractSubject.php');
  include_once('PatternObserver.php');


  class PatternSubject extends AbstractSubject {


    private $newsPatterns = NULL;


    private $observers = array();


    function __construct() {
    }


    function attach(AbstractObserver $observer_in) {

      $this->observers[] = $observer_in;
    }


    function detach(AbstractObserver $observer_in) {
      //$key = array_search($this->observers, $observer_in);
      foreach($this->observers as $okey => $oval) {
        if ($oval == $observer_in) {
          unset($this->observers[$okey]);
        }
      }
    }


    function notify() {
      foreach($this->observers as $obs) {
        $obs->update($this);
      }
    }


    function updateNews($newNews) {
      $this->news = $newNews;
      $this->notify();
    }


    function getNews() {
      return $this->news;
    }


  }
?>
