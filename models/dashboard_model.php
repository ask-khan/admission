<?php
  /**
   *
   */
  class Dashboard_Model extends Model {

    function __construct()
    {
      parent::__construct();
      //echo 'This an Dashboard Model';
    }

    function saveUserData () {
      $check = false;

      $statement  = $this->db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
      $check = $statement->execute( array(':username' => $_POST['userName'] , ':email' => $_POST['emailAddress'], ':password' => $_POST['password'] ));
      $Id = $this->db->lastInsertId();
      if ( $check ) {
        $studentData = array("userName"=> $_POST['userName'], "email"=> $_POST['emailAddress'], "password" => $_POST['password'], 'id' => $Id );
      }

      echo json_encode( $studentData );
    }

    function getUserData () {
      $statement = $this->db->prepare('SELECT * FROM users');
      $statement->setFetchMode(PDO::FETCH_ASSOC);
      $statement->execute();
      $data = $statement->fetchAll();
      echo json_encode( $data );
    }
  }

?>
