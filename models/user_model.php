<?php
  /**
   *
   */
  class User_Model extends Model
  {
     public function __construct()
    {
      parent::__construct();
    }

    public function userList () {
      $statement =  $this->db->prepare('SELECT id, type, username FROM users');
      $statement->execute();
      return $statement->fetchAll();
    }

    public function create ( $userData ) {
      $statement = $this->db->prepare('INSERT into users(username, password, type, email) VALUES (:username, :password, :type, :email)');
      $statement->execute( array(':type' => $userData['role'] , ':username' => $userData['login'] , ':email' => $userData['email'], ':password' => $userData['password'] ));
    }

    public function editSave ( $userData ) {
      $statement = $this->db->prepare('UPDATE users SET username = :username, password = :password, type = :type, email = :email WHERE id = :id');
      $statement->execute( array('username' => $userData['login'], 'password' => $userData['password'], 'type' => $userData['type'], 'email' => $userData['email'], 'id' => $userData['id'] ));
    }

    public function delete ( $id ) {
      $statement = $this->db->prepare('DELETE FROM users WHERE id = :id');
      $statement->execute( array('id' =>  $id ) );
    }

    public function editUser( $id ) {
      $statement = $this->db->prepare('SELECT * FROM users WHERE id = :id');
      $statement->execute( array('id' =>  $id ) );
      return $statement->fetchAll();
    }
  }
?>
