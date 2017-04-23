<?php
  /**
   *
   */
  class Login_Model extends Model
  {
     public function __construct()
    {
      parent::__construct();
      echo 'Login construct';
    }

    public function run () {

       $login = $_POST['login'];
       $password = $_POST['password'];

       $statement  = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = :password");
       $statement->execute( array(':login' => $login , ':password' => $password ));
       $count = $statement->rowCount();

       if ( $count > 0 ) {
         Session::init();
         Session::set('loggedIn', true);
         header('location: ../dashboard');

       } else {
         header('location: ../login');
       }
    }
  }


?>
