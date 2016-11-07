<?php
  interface StrategyOfInterface {
    public function strategy();
  }
  class StrategyA implements StrategyOfInterface {
    public function strategy() {
      echo "strategy A.\n";
    }
  }
  class StrategyB implements StrategyOfInterface {
    public function strategy() {
      echo "strategy B.\n";
    }
  }
  class StrategyC implements StrategyOfInterface {
    public function strategy() {
      echo "strategy C.\n";
    }
  }
  class Commander {
    private $m_strategy;
    function __construct( $mode ) {
      switch( $mode ) {
        case 'A':
          $this->m_strategy = new StrategyA();
          break;
        case 'B';
          $this->m_strategy = new StrategyB();
          break;
        case 'C';
          $this->m_strategy = new StrategyC();
          break;
        default:
          error_log( 'recevied unknwon parameter.');
          break;
      }
    }
    public function command() {
      $this->m_strategy->strategy();
    }
  }
