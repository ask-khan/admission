<h1>User</h1>
<form class="" action="<?php echo URL;?>user/create" method="post">
  <label>Login</label>
    <input type="text" name="login" value=""><br/>
    <label>Email</label>
      <input type="email" name="email" value=""><br/>
  <label>Password</label>
    <input type="password" name="password" value=""><br/>
  <label>Roles</label>
    <select name= "role">
      <option value="default">Default</option>
      <option value="admin">Admin</option>
    </select>
  <label>&nbsp;</label>
  <input type="submit" name="" value="Submit">
</form>
<hr>
<table>
<?php
  foreach ($this->userList as $key => $value) {
    echo '<tr>';
    echo  '<td>'. $value['id'] . '<td>';
    echo  '<td>'. $value['username'] . '<td>';
    echo  '<td>'. $value['type'] . '<td>';
    echo  '<td><a href="'. URL .'user/edit/' . $value['id'] . '">Edit</a> <a href="'. URL .'user/delete/ '. $value['id'] .'">Delete</a></td>';
    echo '<tr>';
  }
?>
</table>
