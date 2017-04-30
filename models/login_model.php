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

       $statement  = $this->db->prepare("SELECT id, type FROM users WHERE username = :username AND password = :password");
       $statement->execute( array(':username' => $login , ':password' => $password ));
       $data = $statement->fetch();
       $count = $statement->rowCount();

       if ( $count > 0 ) {
         Session::init();
         Session::set('type', $data['type']);
         Session::set('loggedIn', true);
         header('location: ../dashboard');

       } else {
         header('location: ../login');
       }
    }
  }


?>
