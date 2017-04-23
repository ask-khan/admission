<?php
  /**
   *
   */
  class Index extends Controllers {

    function __construct() {
      parent::__construct();
      echo 'we are in index.';

    }

    public function Index ()
    {
      $this->view->render( 'index/index' );
    }

    public function details ()
    {
      $this->view->render('index/index');
    }
  }

?>
