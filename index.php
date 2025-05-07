
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
<a href="http://www.facebook.com/" class="facebook"><img src="img/fff.png"/></a>&nbsp;&nbsp;<img src="img/gg.png"/>&nbsp;&nbsp;<img src="img/twitter_32.png"/>


</div>
<ul class="nav nav-tabs"> 
    <li><a class="BHU" href="#profile" data-toggle="tab"><font color="white"><i class=" icon-book icon-large"></i></font><font color="orange">BHU gallery and map</a></font></li>
	<li><a class="news" href="#home" data-toggle="tab"><font color="white"><i class="icon-list-alt icon-large"></i></font><font color="orange">Announcement</font></a></li>
  <li><a href="regio.php" class="h"><i class="icon-user icon-large"></i>REGISTRATION FORM</a></li>

  <div class="jkl">
<div class="jkl">
</head>
              <center><font color="#3123dc"> <div class="mm" id="1">
<div class="col-md-12" style="background:#dadada;  background-color:blue;color:white; padding-top:6px; margin-top:10px; line-height:30px; font-size:30px;"><marquee height="35"length:960px; direction="right" behavior="alternate" scrollamount="2" onMouseOver="this.stop()" onMouseOut="this.start()">
				  <h1 style="border-radius:7px; border:2px solid #dadada; background-color:blue;color:white"> "online classroom scheduling system"</h1>

 </marquee></div></div></div>
  </div></center></font>

 </ul>
</ul>

<div class="tab-content">
<div class="tab-pane" id="home">
<div class="hero-unit-y">

<hr>
<div class="index-text"> 
 



<ol>

<?php
include("dbcon.php");
$msql=mysql_query("select * from messages order by msg_id desc");
while($messagecount=mysql_fetch_array($msql))
{
$id=$messagecount['msg_id'];
$msgcontent=$messagecount['message'];
?>
<hr />
<li class="egg">

<div class="egg_Body">
<h3 class="egg_Message" >
<img src="img/bhu.jpg" width="32" height="32"><span><?php echo $msgcontent; ?></span>

<div style="margin-top:1px; margin-left: 5px;">
<?php 

$sql=mysql_query("select * from comments where msg_id_fk='$id' order by com_id");
$comment_count=mysql_num_rows($sql);

if($comment_count>4)
{
$second_count=$comment_count-4;
?>
<div class="comment_ui" id="view<?php echo $id; ?>">
<div>
<a href="#" class="view_comments" id="<?php echo $id; ?>">View all <?php echo $comment_count; ?> comments</a>
</div>
</div>
<?php 
} 
else 
{
$second_count=0;
}
?>

<div id="view_comments<?php echo $id; ?>"></div>

<div id="two_comments<?php echo $id; ?>">
<?php
$listsql=mysql_query("select * from comments where msg_id_fk='$id' order by com_id limit $second_count,4 ");
while($rowsmall=mysql_fetch_array($listsql))
{ 
$c_id=$rowsmall['com_id'];
$comment=$rowsmall['comments'];
?>

&nbsp;&nbsp;&nbsp;<div class="comment_ui">

<div class="comment_text">
<div  class="comment_actual_text"><img src="img/bhu.jpg" width="32" height="32" /><div id="sssss"><?php echo $comment; ?></div></div>
</div>

</div>

<?php } ?>
<div class="dddd">
<div>
<img src="img/bhu.jpg" width="32" height="32" />
<form action="savecomment.php" method="post">
<input name="mesgid" type="hidden" value="<?php echo $id ?>" />
<input name="mcomment" type="text" placeholder="Write a comment..." style="height: 24px; border:1px solid #BDC7D8; padding:3px; border-width: 1px 0px 1px 1px; width:302px;" required="required"/>
<input id="buts" name="" type="submit" value="comment" />
</form>
</div>
</div>
</div>


</div>
</div>
</li>
<?php
}
?>
</ol>

  

</div>
</div>
</div>
  
  
 
  
  
  
  <div class="tab-pane active" id="profile">
  <div class="hero-unit-y">
  <div class="hero-unit-y">
  <div class="about_nav">

  <ul class="nav nav-tabs nav-stacked">
<ul class="nav nav-tabs nav-stacked">
<li class="active"><a href="#"><font color="white"><i class="icon-flag icon-large"></i></font><font color="white"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#E6E6E6">
<img src="img/lo.png" width="100" height="25">
</body>
</html></font></a></li>

  <li><a data-toggle="modal" href="#mission"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">ABOUT BHU</font></a></li>
    <li><a data-toggle="modal" href="#vision"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Vision and mission</font></a></li>
  <li><a data-toggle="modal" href="#contact"><font color="white"><i class="icon-list-alt icon-large"></i></font><font color="orange">BHU Photo</font></a></li>

  </ul>
</ul>
  
  </div>


  <div class="history_chmsc">
   <p>
  <h2 align="left"><html><head>
<meta name="Keywords" content="ignore-team">
<title>

</title>
 <style type="text/css">
A { text-decoration: none; }
</style>
</head>

</body>
</html></h2>
<!-- Start WOWSlider.com -->
<iframe src="BABA.html" style="width:1000px;height:500px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="100" marginwidth="100"></iframe>
<!-- End WOWSlider.com -->
</div>
  </div>
 </div>
 </div>
  </div>


</body>
<?php include('footer.php'); ?>


</div>
</div>


</body>




<div class="modal hide fade" id="mission">
		<p style="background-color:yellow;">

	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3>ABOUT BHU</h3>
	  </div>
	  <div class="modal-body">
	 <p></p>
	 <p><font color="#3123dc"><div class="widget-inner" style="height:244px;">
                      <marquee height="200" direction="up" behavior="scroll" scrollamount="2" onMouseOver="this.stop()" onMouseOut="this.start()">
 		 		 <h1><u><font color="#FF0099">ABOUT BHU</font></u></h1><br>

                   Bule Hora University (BHU) was established to play its part in the national efforts of bringing quality and excellence in teaching-learning.
 research, community services, administrative functions/good governance, connecting the development of cultural and natural resources with technology and its applications. The name of Bule Hora University derived from the name of Bule Hora town.
   The town has been given that name by its inhabitants for many meanings. The name is combination of two afan oromo words “Bulee” and “Horaa”.”Bulee” means, something aged, ancient, and stayed for a long time, name given for a person whose birth accomplished at down and for a blue color. “ Horaa” something multiply itself, increase in number, grows from time to time, and also name of salty water around there during the time. So, when these two words combined together as one single word, it gives us a meaning something grows from time to time. The foundation stone was laid by H.E Dr. Adhanum Hailu, the then State Minister of Ministry of Education and H.E Mr Abadula Gamada, the then President of Oromiya Regional State, on 28 November 2008.The university was officially established by proclamation No213/2011 (213/2003 E.C) as one of the Ethiopian government higher education institutions (HEIs). This university is located at a distance of 470 km south of Addis Ababa, Oromia Regional State, Borana Zone at Bule Hora Town.
 </p></font>	</P> </marquee>	 </div>	   
</p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		<div class="modal hide fade" id="vision">
		<p style="background-color:yellow;">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> VISSION and MISSION</h3>
	  </div>
	  <div class="modal-body">
	 <p></p>
  <p><font color="#3123dc"><div class="widget-inner" style="height:244px;">
                      <marquee height="200" direction="up" behavior="scroll" scrollamount="2" onMouseOver="this.stop()" onMouseOut="this.start()">
					                         <h2><u><font color="#FF0099">VISSION</font></u></h2><br>

Bule Hora University: Excellence, Competence, and Educational Leaderhip in the case of online classroom scheduling system in Science and Technology.
  
     Bule Hora University aspires to be one of top five universities at national level and competent in East Africa by 2022.
                       <h2><u><font color="#FF0099">MISSION</font></u></h2><br>

Bule Hora university Vs jimma and oxford University "Student success Center establishment Project
	
	 Bule Hora University campus Greening project
	
	 Hule Hora and Jimma university project on man-power capacity bulding
		<div class="modal hide fade" id="contact">
		<p style="background-color:yellow;">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> VISSION and MISSION</h3>
	  </div>
	  <div class="modal-body">
	 <p></p>
  <p><font color="#3123dc"><div class="widget-inner" style="height:244px;">
                      <marquee height="200" direction="up" behavior="scroll" scrollamount="2" onMouseOver="this.stop()" onMouseOut="this.start()">
					                         <h2><u><font color="#FF0099">VISSION</font></u></h2><br>

Bule Hora University: Excellence, Competence, and Educational Leaderhip in the case of online classroom scheduling system in Science and Technology.
  
     Bule Hora University aspires to be one of top five universities at national level and competent in East Africa by 2022.	 
</p></font>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</p>
		</marquee>
		</div>




				
	 

		
		


 



