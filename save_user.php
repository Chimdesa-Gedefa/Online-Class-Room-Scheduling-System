<?php 
include('dbcon.php');
include('session.php'); 

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$department=$_POST['department'];
$user_type=$_POST['user_type'];
$q=$_POST['security_q'];
$a=$_POST['security_a'];

if (is_numeric($first_name) == true){
echo 'first name should be character only','</br>';
echo '<a href = "admin.php"/>back</a>';
   exit();

}
else if(is_numeric($l_name)==true) {
echo 'last name shuold be character only','</br>';
echo '<a href="admin.php"/>back</a>';
  exit();	
}
else if(is_numeric($last_name) == true) {
	echo 'last name should be character only','</br>';
	echo '<a href = "admin.php"/>back</a>';
	exit();
}
else if(is_numeric($password) == true) {
	echo 'password should be character only','</br>';
	echo '<a href = "admin.php"/>back</a>';
	exit();
else if(is_numeric($email) == true) {
	echo 'email should be character only','</br>';
	echo '<a href = "admin.php"/>back</a>';
	exit();
else if(is_numeric($departement) == true) {
	echo 'departement should be character only','</br>';
	echo '<a href = "admin.php"/>back</a>';
	exit();
{ ?>
<script type="text/javascript">
alert('First Name, Last Name And User Name information must be character strings');
window.location="user_account.php";
</script>

<?php
}
else 
{
mysql_query("insert into users (first_name, last_name,user_name,password,email, department, user_type,security_q, security_a )
VALUES('$first_name','$last_name','$user_name','$password','$email' ,'$department', '$user_type', '$q', '$a')")or die(mysql_error());

}


$logout_query=mysql_query("select * from users where user_id=$id_session");
$row=mysql_fetch_array($logout_query);
$type=$row['user_type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add User','$first_name&nbsp;$last_name','$type')") or die(mysql_error());
?>
<script type="text/javascript">
alert('user account sucssfully Created!');
window.location="user_account.php";
</script>

