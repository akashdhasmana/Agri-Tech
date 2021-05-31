<?php

include 'connect.php';

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO user(name,phone,email,message)VALUES('$name','$phone','$email','$message')";
$r=$conn->query($sql);

if($r) {
	echo "<script>
	window.alert('your response has been submitted');
	<script>";
	header("location:mysite.html");
} 

else {
	echo "<script>
		window.alert('Unsuccessful submission');
	</script>";
}

?>