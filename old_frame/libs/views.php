<?php

  /**
   *
   */
  class views
  {

    function __construct()
    {
      echo "This is view Constructor.";
    }

     public function render ( $name )
    {

      require 'view/'. $name .'.php';
    }

  }



?>
