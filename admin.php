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
<ul class="nav nav-tabs"> 
  <div class="jkl">
<div class="jkl">
</head>
              <center><font color="#3123dc"> <div class="mm" id="1">
<div class="col-md-12" style="background:#dadada;  background-color:blue;color:white; padding-top:6px; margin-top:10px; line-height:30px; font-size:30px;"><marquee height="35"length:960px; direction="right" behavior="alternate" scrollamount="2" onMouseOver="this.stop()" onMouseOut="this.start()">
				  <h1 style="border-radius:7px; border:2px solid #dadada; background-color:blue;color:white"> "user registration form"</h1>

 </marquee></div></div></div>
  </div></center></font>

 </ul>
</ul>
<form id="save_voter" class="form-horizontal" method="POST" action="save_user.php">	
 <fieldset>
	</br>
	<div class="add_subject_user">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc" >First Name:</label></font>
 <input name="fname" type="text" id="fname" placeholder="enter first name" style="border-radius:7px; border:2px solid #dadada;" pattern="[A-Za-z]{2,}" title="name should greate 2 characters"/>
    
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Last Name:</label></font>
	<input type="text" id="lname" name="lname" pattern="[A-Za-z]{2,}" title="name should greate 2 characters"  placeholder="enter your last name" style="border-radius:7px; border:2px solid #dadada;" />
     </div>
    
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc"required="required">User Name:</label></font>
     <input name="uname" type="text" id="uname" placeholder="enter User name" style="border-radius:7px; border:2px solid #dadada;" pattern="[A-Za-z]{2,}" title="name should greate 2 characters"/>

    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Password:</label></font>
     <input name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" placeholder="enter your password"type="password" id="password" style="border-radius:7px; border:2px solid #dadada;" />

    </div>
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Email:</label></font>
        <input name="Email" type="text" id="Email" placeholder="enter Email name" style="border-radius:7px; border:2px solid #dadada;"/>

    </div>
		<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">enter ur age:</label></font>
<td><input name="age" type="number"  max="100" min="1" step="1" value="1" style="border-radius:7px; border:2px solid #dadada;" maxlength="3"/></td></tr>
</div>
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Department:</label></font>
    <div class="controls">
 <select name="department" class="span3"  id="span900" required="required">
 <option>--selct department--</option>
<?php $query=mysql_query("select * from department")or die(mysql_error);
while($dep=mysql_fetch_array($query))
{
 ?>
 
 <option><?php echo $dep['department_name'];?></option>
 <?php 
 }?>
	</select>
    </div>
    </div>

<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">User Type:</label></font>
    <div class="controls">
   <select name="user_type" class="span3"  id="span900" required="required">
	<option>User</option>
	</select>
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Security Question:</label></font>
    <div class="controls">
	 <select name="security_q" class="span3"  id="span900" required="required">
   	<option>1. What is your beloved ancle name?</option>
	<option>2. Where you spend your childhood time? </option>
	<option>3. what was the name of your elementary school teacher?</option>
	<option>4. in which region BHU univeresity is found> </option>
	<option>5. what is the name of this system developers?</option>
	<option>6. What was the name of thir advisor while priparing this system?</option>

	</select>
	</div>
	</div>
	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Security Answer:</label></font>
    <div class="controls">
	<input type="text" name="security_a" class="span3" id="span900" required="required"value=""> 
   </div>
   </div>
	
	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
</fieldset>
</form>
	</div>	

<?php include('footer.php');?>
</div>
</body>
	
	
