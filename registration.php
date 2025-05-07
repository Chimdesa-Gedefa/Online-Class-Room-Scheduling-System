
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
<?php 
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
$(function() 
{
$(".view_comments").click(function() 
{

var ID = $(this).attr("id");

$.ajax({
type: "POST",
url: "viewajax.php",
data: "msg_id="+ ID, 
cache: false,
success: function(html){
$("#view_comments"+ID).prepend(html);
$("#view"+ID).remove();
$("#two_comments"+ID).remove();
}
});

return false;
});
});
</script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more').hide();
		
		 $("#click").click(function () {
      $(".more").toggle("slow");
      $("#click").hide("slow");
    });
	
	

		
		});
</script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more1').hide();
		
		 $("#click1").click(function () {
      $(".more1").toggle("slow");
      $("#click1").hide("slow");
    });
	
	

		
		});
</script>
<style>
ol{font-family:"lucida grande",tahoma,verdana,arial,sans-serif;font-size:11px;color:#333;margin:0;padding:0;text-align:left;direction:ltr;unicode-bidi:embed}
*
{
margin:0px;
padding:0px;

}
a
{	text-decoration:none; }
	

.egg{min-height:58px;padding-bottom:8px;position:relative}
.egg_Body{border-top:1px solid #eee;color:#808080;padding-top:8px}
.egg_Message{font-size:13px !important;font-weight:normal;overflow:hidden}

h3{font-size:13px;color:#cd11f4;margin:0;padding:0}
.comment_ui
{
background-color:#fdfdfd;border-bottom:1px solid #e5eaf1;clear:left;float:none;overflow:hidden;margin-bottom:2px;padding:6px 4px 3px 6px;width:431px; 
}
.dddd
{
background-color:#48b1f0;border-bottom:1px solid #68bde1;clear:left;float:none;overflow:hidden;margin-bottom:2px;padding:6px 4px 3px 6px;width:431px; 
}
.comment_text{padding:2px 0 4px; color:#333333}
.comment_actual_text{display:inline;padding-left:.4em}

ol { 
	list-style:none;
	margin:0 auto;
	width:500px;
	margin-top: 20px;
}
.clean { display:none}
.editbox
{
overflow: hidden; height: 61px;border:solid 1px #0099CC; min-width:488px; max-width:488px; font-size:12px;font-family:Arial, Helvetica, sans-serif; padding:5px
}
#but{
background-color: #ffffff;
border: 1px solid #ffffff;
padding:2px 16px;
font-family:Arial, Helvetica, sans-serif;
color:#FFFFFF;
float:right;
cursor:pointer;
margin-top: 2px;
}
#buts{
background-color: blue;
border: 1px solid #29447e;
padding:3px 16px;
font-family:Arial, Helvetica, sans-serif;
color:#FFFFFF;
float:right;
cursor:pointer;
height: 32px;
}
.egg_Message img{
float:left;
padding-right: 7px;
}
#sssss{
float:right;
width: 392px;
}
</style>

<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more').hide();
		
		 $("#click").click(function () {
      $(".more").toggle("slow");
      $("#click").hide("slow");
    });
	
	

		
		});
</script>
<script type="text/javascript">
	$(document).ready(function()
		{
		$('.more1').hide();
		
		 $("#click1").click(function () {
      $(".more1").toggle("slow");
      $("#click1").hide("slow");
    });
	
	

		
		});
</script>
</head> 
<body>

<div class="coat">

<div class="wrapper_home">
<div class="navbar navbar-fixed-top">
 <div class="navbar">
  <div class="navbar-inner1">
  <div class="nav_jkl">
    <div class="container">
<ul class="nav">
<a class="brand" href="#">
<font color="red">Class Schedule Viewer</font></a>
  <li class="active"> <a href="index.php"><i class="icon-home icon-large"></i>Home</a></li>
<li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>Login <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="admin_login"href="admin/index.php">Admin</a></li>
		<li><a class="scheduler_login"href="admin/index3.php">Scheduler</a></li>
        <li><a class="user_login"href="admin/index2.php">User(Dep Head)</a></li>
      </ul>  
  <li><a href="faq.php" class="faq" id="faq"><i class="icon-question-sign icon-large"></i>HELP/FAQ</a></li>
  <li><a href="feedback.php" class="feedback"><i class="icon-comment icon-large"></i>Feedback</a></li>
   <li><a href="contact us.php" class="contact us"><i class="icon-music icon-large"></i>contact us</a></li>
 <li class="dropdown" id="language"> <a href="#"
          class="language"
          data-toggle="dropdown"> <i class="icon-flag icon-large"></i>Language <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="Amharic"href="index_amharic.php">Amharic</a></li>
        <li><a class="Oromifa" href="index_oromifa.php">Oromifa</a></li>
      </ul>
  </ul>
  </ul>
    </div>
    </div>
  </div>
</div>
</div>
<div class="hero-unit">
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="img/bhu12.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/classroom.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu12.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu10.jpg" width="1090" height="150"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>
<div class="jkl">
</div>
<div class="hero-unit-bud">
<div class="jkl">
</div>
<div class="jkl">
<a href="http://www.facebook.com/" class="facebook"><img src="img/fff.png"/></a>&nbsp;&nbsp;<img src="img/gg.png"/>&nbsp;&nbsp;<img src="img/rss_32.png"/>&nbsp;&nbsp;<img src="img/twitter_32.png"/>
&nbsp;&nbsp;<img src="img/blogger.png"/>
</div>
<ul class="nav nav-tabs"> 
  <li><a href="registration.php" class="registration"><i class="icon-user icon-large"></i>REGISTRATION FORM</a></li>
  <div class="jkl">
<div class="jkl">



 </ul>
</ul>
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
	 	 $sex= $_POST ['sex'];
	 $age= $_POST ['age'];
	 $q=mysqli_query($con, "insert into    users(first_name,last_name,user_name,password,email,user_id,user_type,faculity,department,sex,age)
	 VALUES('$first_name','$last_name','$user_name','$password','$email','$user_id','$user_type','$faculity','$department','$sex','$age')");
	 if($q)
	 {
	
		 echo "registration is succsesful";
	 }
	 else{
                    echo "registration is not succsesful";

	 }

 }
?>
<html>
<head>
</head>
              <center><font color="#3123dc"> <div class="mm" id="1">
			  <h2 style="border-radius:7px; border:2px solid #dadada;  background-color:blue;color:white">register by filling the following form</h2>
  </div></center></font>

<body>
<table width="100" height="300">
<tr>
<form action="" method="post">
<font color="#FFFFFF">
  <center><p>Enter first_name
    <input type="text" name="first_name"required="required"><br></br></center>
    <center><p>Enter last_name
	<input type="text" name="last_name"required="required"><br></br></center>
   <center><p>Enter user_name
   <input type="text" name="user_name"required="required"><br></br></center>
  <center> <p> Enter password
  <input type="password" name="password"required="required"><br></br></center>

  <center> <p> Enter email
  <input type="email" name="email"required="required"><br></br></td></center>
   <center><p>Enter user_id
   <input type="user_id" name="user_id"required="required"><br></br></center>
   <center><p>Enter faculity
  <input name="faculity" type="text" id="faculity"required="required"><br></br></center>
   <center><p>Enter department
   <input name="department" type="text" id="department"required="required"><br></br></center>
      <center><p>Enter sex
                <span class="dv">                <span class="f"><h4 style="color:white">male</h4></span></span>

                <input type="radio" name="sex" id="sex" value="sex" />
                <span class="dv">                <span class="f"><h4 style="color:white">female</h4></span></span>
<input type="radio" name="sex" id="sex" value="sex" /></td></tr></center>
   <center><p>Enter ur age
<input name="age" type="number"  max="150" min="1" step="1" value="1"</center>

   <center><p>select role
    <label for="user"></label>
    <select name="user_type" id="user_type">
      <option>user</option>
    </select>
     <center><p><input type="submit" name="submit" value="submit"></td></tr></table></center>
  </p>
  </font>
</form>
</body>
</font>
</html>



				
				</div>
	<?php ('index.php'); ?>			
<?php include('footer.php'); ?>
</div>


</body>


</html>
