<?php include "menu.php"; ?>
<form class="" action="login.php" method="post">
  <table >
    <tr>
      <td>Username</td><td><input type="text" name="user" value="" Placeholder="write your username" ></td>

    </tr>
    <tr>
      <td>Password</td><td><input type="password" name="pass" value="" required=""></td>
    </tr>
    <tr>
      <td></td><td><input type="submit" name="" value="Login"></td>
    </tr>
  </table>
</form>
<?php
$btn=$_POST['btnLogin'];
if(isset($btn)){
  echo 'Hello '.$_POST['user'];
}
 ?>
<?php include "footer.php"; ?>