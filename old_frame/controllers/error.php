<?php
  class Errors extends controllers {
    /*
    * Constructor.
    */
    function __construct () {
      parent::__construct();
      echo 'This is an Error.';

      $this->views->render('error/index');
    }

  }
?>
