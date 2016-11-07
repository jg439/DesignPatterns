<?php
  require_once( 'strategy.php' );
  echo "testing A...\n";
  $commander = new Commander( 'A' );
  $commander->command();
  echo "\n";
  echo "testing B...\n";
  $commander = new Commander( 'B' );
  $commander->command();
  echo "\n";
  echo "testing C...\n";
  $commander = new Commander( 'C' );
  $commander->command();
  echo "\n";
  ?>
