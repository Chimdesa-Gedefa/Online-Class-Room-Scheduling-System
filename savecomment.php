<?php
include("admin/dbcon.php"); include('session.php');
$mcomment=$_POST['mcomment'];
$mesgid=$_POST['mesgid'];
mysql_query("INSERT INTO comments (comments, msg_id_fk)
VALUES ('$mcomment','$mesgid')");

$logout_query=mysql_query("select * from users where user_id=$id_session");
$row=mysql_fetch_array($logout_query);
$type=$row['user_type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Comment on Notification','$mcomment','$type')") or die(mysql_error());


header("location: index.php");
?>