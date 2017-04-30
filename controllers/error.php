<?php
  /**
   *
   */
  class Errors extends Controllers {

    function __construct()
    {
      parent::__construct();
      //echo "This is an Error";

    }

    public function Index ()
    {
      $this->view->msg = 'This is an error';
      $this->view->render( 'error/index' );
    }
  }

?>
