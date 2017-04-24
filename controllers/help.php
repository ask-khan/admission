<?php
  /**
   *
   */
  class Help extends Controllers
  {

    function __construct()
    {
      parent::__construct();
      echo 'we are inside help <br>';

    }

    public function Index ()
    {
      $this->view->render( 'help/index' );
    }

    function other( $arg = false )
    {

      require 'models/help_model.php';
      $model = new Help_Model();
      $this->view->Ball = $models->Ball();
    }
  }


?>
