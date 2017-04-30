<h1>User : Edit </h1>
<form class="" action="<?php echo URL;?>user/saveEdit" method="post">
  <label>Login</label>
    <input type="text" name="login" value="<?php echo $this->editData[0]['username'];?>"><br/>
    <label>Email</label>
      <input type="email" name="email" value="<?php echo $this->editData[0]['email'];?>"><br/>
  <label>Password</label>
    <input type="password" name="password" value="<?php echo $this->editData[0]['password'];?>"><br/>
  <label>Roles</label>
    <select name= "role">
      <option value="default" <?php if( $this->editData[0]['type'] == 'default' ) echo "selected"; ?>>Default</option>
      <option value="admin" <?php if( $this->editData[0]['type'] == 'admin' ) echo "selected"; ?>>Admin</option>
    </select>
  <label>&nbsp;</label>
  <input type="submit" name="" value="Submit">
</form>
