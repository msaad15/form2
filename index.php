<!DOCTYPE html>
<html>
<body>

<form action="/project/form/index.php" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    Name:<br>
    <input type="text" name="u_name" id="user" placeholder="Name">
    <br>
    Password:<br>
    <input type="text" name="u_pass" placeholder="Password">
    <br>
	Email:<br>
    <input type="text" name="u_email" placeholder="Email Address">
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','my_db') or die (mysql_error());
//$db = mysql_select_db('my_db',$con) or die (mysql_error()); 
if(isset($_POST['submit']))
{
	$name = $_POST['u_name'];
	$pass = $_POST['u_pass'];
	$email = $_POST['u_email'];
	echo $name;
	echo $pass;
	echo $email;
	//echo "Saad";
	$sql = "INSERT INTO user_reg (name,password,email)
VALUES ('$name', '$pass', '$email')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
?>