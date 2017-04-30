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
  }

?>
