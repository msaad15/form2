<?php
$con = mysqli_connect('localhost','goshopk','5)-!2uc=i.BH','goshopk_my_db') or die (mysql_error());
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