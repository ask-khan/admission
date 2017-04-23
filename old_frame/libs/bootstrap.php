<?php
  class bootstrap {
    function __construct() {
      /*
      * To Index Template Function.
      */
      $url = $_GET['url'];
      $url = rtrim($url, '/');
      $url  =  explode('/', $url);

      // set files path.
      $files = 'controllers/' . $url[0] . '.php';

      // if files is exist.
      if ( file_exists( $files ) ) {
        require $files;
      } else {
        require 'controllers/error.php';
        //throw new Exception("The File:" . $files . "Does not exist.");
        $controllers = new Errors();
        return false;
      }

      $controllers = new $url[0];

      // If isset url is equal to 2.
      if ( isset( $url[2] ) ) {
        $controllers->{ $url[1] }( $url[2] );
      } else {
        if ( isset( $url[1] ) ) {
          $controllers->{$url[1]}();
        }
      }
    }
  }

?>
