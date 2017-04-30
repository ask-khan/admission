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

      $statement  = $this->db->prepare('INSERT INTO users (username, email, password, type) VALUES (:username, :email, :password, :type)');
      $check = $statement->execute( array(':type' => 'user' , ':username' => $_POST['userName'] , ':email' => $_POST['emailAddress'], ':password' => $_POST['password'] ));
      $Id = $this->db->lastInsertId();
      if ( $check ) {
        $studentData = array("userName"=> $_POST['userName'], "email"=> $_POST['emailAddress'], "password" => $_POST['password'], 'id' => $Id );
      }

      echo json_encode( $studentData );
    }

    function getUserData () {
      $statement = $this->db->prepare('SELECT * FROM users WHERE type <> :admin');
      $statement->setFetchMode(PDO::FETCH_ASSOC);
      $statement->execute(array(':admin' => 'admin'));
      $data = $statement->fetchAll();
      echo json_encode( $data );
    }

    function deleteUserData () {
      $id = $_POST['id'];
      $statement = $this->db->prepare('DELETE FROM users WHERE id="' . $id . '"');
      $statement->execute();
    }
  }

?>
