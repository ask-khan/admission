<?php
  /**
   *
   */
  class Dashboard extends controllers
  {

    function __construct()
    {
      parent::__construct();
      Session::init();
      $logged = Session::get('loggedIn');
      if ( $logged == false ) {
        Session::destory();
        header('location: ../login');
        exit;
      }
    }

    public function Index ()
    {
      $this->view->render( 'index/dashboard' );
    }

    public function logout() {
      Session::destory();
      header('location: ../login');
      exit;
    }

    public function add(){

      $emailAddress = $_POST['emailAddress'];
      $password = $_POST['password'];

      print_r( $emailAddress );
    }

  }



?>
