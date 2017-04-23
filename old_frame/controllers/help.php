<?php
class Help extends controllers {
  /*
  * Constructor.
  */
  function __construct () {
    parent::__construct();
    echo 'we are in Help <br/>';
  }
  /*
  * Other Function.
  */
  public function other ( $args = false ) {
    echo 'we are inside other <br/>';
    echo 'Optional'. $args . '<br/>';
  }
}
?>
