
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>

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

<style>
ol{font-family:"lucida grande",tahoma,verdana,arial,sans-serif;font-size:11px;color:#fabef5;margin:0;padding:0;text-align:left;direction:ltr;unicode-bidi:embed}
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
<font color="white">Class Schedule Viewer</font></a>
  <li class="active"> <a href="index_oromifa.php"><i class="icon-home icon-large"></i>Ka'umsa</a></li> 
  <li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>Baniinsa <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="admin_login"href="admin/index1.php">To'ataa</a></li>
		<li><a class="scheduler_login"href="admin/index31.php">sagantaa baasaa</a></li>
        <li><a class="user_login"href="admin/index21.php">Fayyadamtoota (Dep head) </a></li>
      </ul>
	    <li><a href="faq.php" class="faq" id="faq"><i class="icon-question-sign icon-large"></i>Gargaaruu</a></li>
  <li><a href="feedback.php" class="feedback"><i class="icon-comment icon-large"></i>Yaada</a></li>
<li class="dropdown" id="language"> <a href="#"
          class="language"
          data-toggle="dropdown"> <i class="icon-flag icon-large"></i>Afaan <b class="caret"></b> </a>
      <ul class="dropdown-menu">
	  <li><a class="English" href="index.php"> English</a></li>
        <li><a class="Amharic"href="index_amharic.php">Amahariffa</a></li>
      </ul>
  <li class="dropdown" id="language"> <a href="#"
          class="language"
          data-toggle="dropdown"> <i class="icon-flag icon-large"></i>Afaan <b class="caret"></b> </a>
      <ul class="dropdown-menu">
	  <li><a class="English" href="index.php"> English</a></li>
        <li><a class="Amharic"href="index_amharic.php">Amahariffa</a></li>
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
  <div class="active item"><img src="img/COR.JPG" width="1090" height="150"></div>
 
     
  </div>
  <!-- Carousel nav -->

</div>
</div>

<div class="hero-unit-bud">

<ul class="nav nav-tabs"> 
  <li class="active"><a href="#home" data-toggle="tab"><font color="white"><i class="icon-question-sign icon-large"></i></font><font color="white">gaaffii gaafanne karaa itti barru</font></a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

  <div class="tab-pane active" id="profile">
<ul class="nav nav-tabs">
  <li class="active"><a href="#"><font color="green"><i class="icon-question-sign icon-large"></i></font><font color="green">1. akkataa itti barbaannu?</font></a></li>
  <li><a  href="#2"><font color="green"><i class="icon-question-sign icon-large"></i></font><font color="green">2. akka itti daree schedule goonu?</font></a></li>
  <li><a  href="#3"><font color="green"><i class="icon-question-sign icon-large"></i></font><font color="green">3. akka itti print goonu?</font></a></li>
  <li><a  href="#4"><font color="green"><i class="icon-question-sign icon-large"></i></font><font color="green">4. akka itti..?</font></a></li>
  <li><a  data-toggle="modal" href="#5"><font color="green"><i class="icon-question-sign icon-large"></i></font><font color="green">5. akka itt..?</font></a></li>
  


</ul>
</ul>
  
  </div>

<hr>
  <div class="mm" id="1">
  <h2 align="left">1. akka itti barbaannu?</h2>
  <hr>
  <img src="img/faqsearch.GIF">
  </div>
  
  <hr>
    <div class="mm" id="2">
  <h2 align="left">2. akka itti print goon?</h2>
  <hr>
  <img src="img/faqprint.GIF">
  </div>
  
  

  
  
  <hr>
    <div class="mm" id="4">
  <h2 align="left">4. akka itti schedule goonu?</h2>
  <hr>
  <img src="img/schedu.gif">
  </div>
  
  
  
 
  
  
  
  
  
 </div>
 </div>
  </div>




</div>


</div>
</body>
</html>



		<div class="modal hide fade" id="5">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> How to....?
	  </div>
	  <div class="modal-body">
	 <p></p>
  <p>Just follow the Mouse Hover Help!!!
  when u put the mouse pointer on the text it will display what you can do with that!
</p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

