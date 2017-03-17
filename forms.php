<?php include "menu.php" ?>
<h2>Forms</h2>
<form class="" action="forms.php" method="post">
  <label for="country">Choose the country</label>
  <select id="country" name="country">
    <option value="">Choose</option>
    <option value="Fin"Fin>Finland</option>
    <option value="Rus">Russian</option>
    <option value="Nep">Nepal</option>
    <option value="Viet">Vietnam</option>
    <option value="Lat">Latvian</option>

  </select>
<label for="gender">Choose your gender</label><br>
  <input type="radio" name="gender" value="female">Female<br>
  <input type="radio" name="gender" value="male">Male<br>
  <label for="status">Choose your status</label><br>
  <input type="radio" name="status" value="student">Student<br>
  <input type="radio" name="status" value="teacher">Teacher<br>
  <input type="submit" name="btnSend" value="Send">
</form>

<?php
$btn=$_POST['btnSend'];
if(isset($btn)){
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  echo 'Hello '.$gender.' form '.$country;
}
 ?>
<?php include "footer.php" ?>
