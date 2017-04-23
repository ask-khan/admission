 <?php
  /**
   *
   */
  class Login extends Controllers {

    function __construct() {
      parent::__construct();
      echo 'we are in Login.';

    }

    public function Index ()
    {
      $this->view->render( 'index/login' );
    }

    public function run () {
      $this->model->run();
    }
    // function other( $arg = false )
    // {
    //   $this->view->render('index/login');
    // }
  }

?>
