<?php

  $r = new Redis();
  $r->connect( "127.0.0.1", 8211 );

  $r->auth("orbs79wedJUjus");

  $r->set( "key", "value" );

  $val = $r->get( "key" );

  $val = $r->keys("*");

  var_dump( $val );

  $r->close();

?>
