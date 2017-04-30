<h1>User</h1>
<form class="" action="index.html" method="post">
  <label>Login</label>
    <input type="text" name="login" value=""><br/>
  <label>Password</label>
    <input type="text" name="password" value=""><br/>
  <label>Roles</label>
    <select>
      <option value="default">Default</option>
      <option value="admin">Admin</option>
    </select>
  <label>&nbsp;</label>
</form>
<hr>
<table>
<?php
  foreach ($this->userList as $key => $value) {
    echo '<tr>';
    echo  '<td>'. $value['id'] . '<td>';
    echo  '<td>'. $value['username'] . '<td>';
    echo  '<td>'. $value['type'] . '<td>';
    echo  '<td><a href="#">Edit</a><a href="#">Delete</a></td>';
    echo '<tr>';
  }
?>
</table>
