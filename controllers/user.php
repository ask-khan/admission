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

      $userData =  array();

      $userData['login'] = $_POST['login'];
      $userData['password'] =  md5( $_POST['password'] );
      $userData['role'] = $_POST['role'];
      $userData['email'] = $_POST['email'];

      $this->model->create( $userData );
      header('location:'. URL . 'user');
    }

    public function edit ( $id ) {
      $this->view->editData = $this->model->editUser( $id );
      $this->view->render('user/edit');
    }

    public function delete ( $id ) {
      $this->model->delete( $id );
      header('location:'. URL . 'user');
    }

    public function saveEdit ( $id ) {
      $userData =  array();
      $userData['id'] = $id;
      $userData['login'] = $_POST['login'];
      $userData['password'] =  md5( $_POST['password'] );
      $userData['role'] = $_POST['role'];
      $userData['email'] = $_POST['email'];

      $this->model->editSave( $userData );
      header('location:'. URL . 'user');
    }
  }
?>
