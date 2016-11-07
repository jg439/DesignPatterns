<?php

class Watch{
  private $watchMake;
  private $watchModel;
  public function __construct($make, $model) {
    $this->watchMake = $make;
    $this->watchModel = $model;
  }
  public function getMakeAndModel() {
    return $this->watchMake . ' ' . $this->watchModel;
  }
}
class WatchFactory {
  public static function create($make, $model) {
    return new Watch($make, $model);
  }
}

echo 'Testing my Factory Watch Design Pattern';
echo "<br>";

$rolex = WatchFactory::create('Rolex', 'Oyster Perpetual');

print_r($rolex->getMakeAndModel());
?>
