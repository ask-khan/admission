<?php
  class Bootstrap {

    function __construct () {

      $url = isset( $_GET['url'] ) ? $_GET['url'] : null ;
      $url = rtrim( $url, '/');
      $url = explode ('/', $url );

      // if favicon is exist.
      if ($_SERVER['REQUEST_URI']=='/favicon.ico') exit('');

      if ( empty( $url[0] ) ) {
        require 'controllers/index.php';
        $controllers = new Index();
        $controllers->index();
        return false;
      }

      $files = 'controllers/'. $url[0] . '.php';

      if ( file_exists( $files ) ) {
        require $files;
      } else {
        $this->error();
      }

      $controllers = new $url[0];
      //print_r( $controllers );
      $controllers->Load_Model( $url[0] );

      if ( isset( $url[2] ) ) {
        if ( method_exists( $controllers, $url[1] ) ) {
            $controllers->{ $url[1] }( $url[2] );
        } else {
          $this->error();
        }
      } else {
        if ( isset( $url[1] ) ) {
          if ( method_exists( $controllers, $url[1] ) ) {
              $controllers->{ $url[1] }();
          } else {
            $this->error();
          }
        } else {
          $controllers->index();
        }
      }
    }

    public function error ()
    {
      require 'controllers/error.php';
      $controllers = new Errors();
      $controllers->index();
      return false;
    }

  }

?>
