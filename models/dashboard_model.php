<?php
  /**
   *
   */
  class Dashboard_Model extends Model {

    function __construct()
    {
      parent::__construct();
      echo 'This an Dashboard Model';
    }

    function saveUserData () {
      echo $_POST['userName'];

    }
  }

?>
