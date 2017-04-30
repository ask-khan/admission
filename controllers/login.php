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
      $this->view->render( 'login/index' );
    }

    public function run () {
      $this->model->run();
    }
    
  }

?>
