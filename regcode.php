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
<pre>
<?php
$con=mysqli_connect("localhost","root","");
 mysqli_select_db($con,"db_sucss_last");
 if(isset($_POST['submit']))
 {
	 
	 
 
	 $first_name= $_POST ['first_name'];
	 $last_name= $_POST ['last_name'];
	 $user_name= $_POST ['user_name'];
	 $password= $_POST ['password'];
	 $email= $_POST ['email'];
	 $user_id= $_POST ['user_id'];
	 $user_type= $_POST ['user_type'];
	 $faculity= $_POST ['faculity'];
	 $department= $_POST ['department'];
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
	 $q=mysqli_query($con, "insert into    users(first_name,last_name,user_name,password,email,user_id,user_type,faculity,department)
	 VALUES('$first_name','$last_name','$user_name','$password','$email','$user_id','$user_type','$faculity','$department')");
	 if($q)
	 {
		 echo "registration is succsesful";
	 }
	 else{
                    echo "registration is not succsesful";

	 }

 }
 }
?>
 </pre>
 <p><a href="registration.php"> back to register</a></p>
</body>
</html>
