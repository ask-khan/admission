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

      $this->view->js = array('dashboard/js/default.js');
    }

    public function Index ()
    {
      $this->view->render( 'dashboard/index' );
    }

    public function logout() {
      Session::destory();
      header('location: ../login');
      exit;
    }

    public function saveUserData(){
      $this->model->saveUserData();
    }

    public function getUserData(){
      $this->model->getUserData();
    }

    public function deleteUserData() {
      $this->model->deleteUserData();
    }
  }



?>
