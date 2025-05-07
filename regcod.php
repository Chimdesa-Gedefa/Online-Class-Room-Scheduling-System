<html>
<style type="text/css">
a:link {
	color: #F00;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #00F;
}
a:hover {
	text-decoration: none;
	color: #0FF;
}
a:active {
	text-decoration: none;
	color: #FF0;
}
body {
	background-color: #09C;
}

<body> 
<pre><?php
include('connection.php');

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$country =$_POST['country'];
$age =$_POST['age'];
$sex =$_POST['sex'];
$email =$_POST['email'];
$password =$_POST['password'];
$confirm =$_POST['confirm'];
if (is_numeric($fname) == true){
echo 'first name should be character only','</br>';
echo '<a href = "registration.php"/>back</a>';
   exit();

}
else if(is_numeric($lname)==true) {
echo 'last name shuold be character only','</br>';
echo '<a href="registration.php"/>back</a>';
  exit();	
}
else if(is_numeric($country) == true) {
	echo 'country should be character only','</br>';
	echo '<a href = "registration.php"/>back</a>';
	exit();
}
else if(is_numeric($email) == true) {
	echo 'email should be character only','</br>';
	echo '<a href = "registration.php"/>back</a>';
	exit();
}
$save=mysql_query("INSERT INTO register(fname,lname,country,age,sex,email,password,confirm)
	VALUES ('$fname','$lname','$country','$age','$sex','$email','$password','$confirm')");
	if(!$save)
	{
		die(mysql_error());
		}
	echo"<script>alert('You are registered succesfully')</script>";
	header('location:studentlogin.php');	
	
	exit();
?>  
</pre>
 <p><a href="registration.php"> back to register</a></p>
</body>
</html>