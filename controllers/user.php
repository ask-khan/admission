<?php
  /**
   *
   */
  class User extends controllers
  {

    function __construct()
    {
      parent::__construct();
      Session::init();
      $logged = Session::get('loggedIn');
      $role = Session::get('type');

      if ( $logged == false || $role != 'owner') {
        Session::destory();
        header('location: ../login');
        exit;
      }

    }

    public function Index ()
    {
      $this->view->userList = $this->model->userList();
      $this->view->render( 'user/index' );
    }

    public function create () {

    }

    public function edit ( $id ) {

    }

    public function delete ( $id ) {

    }

  }
?>
