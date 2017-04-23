<?php
  /**
   *
   */
  class Controllers {

    function __construct()
    {
      echo 'Main Controllers';
      $this->view = new View();
    }

    public function Load_Model ( $name ) {
      $path = 'models/' . $name . '_model.php';

      if ( file_exists( $path ) ) {
        require  $path;
        $modelName = $name . '_Model';
        $this->model = new $modelName();
      }
    }
  }
?>
