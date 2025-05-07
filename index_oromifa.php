
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>


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

h3{font-size:13px;color:#333;margin:0;padding:0}
.comment_ui
{
background-color:#f2f2f2;border-bottom:1px solid #e5eaf1;clear:left;float:none;overflow:hidden;margin-bottom:2px;padding:6px 4px 3px 6px;width:431px; 
}
.dddd
{
background-color:#f2f2f2;border-bottom:1px solid #e5eaf1;clear:left;float:none;overflow:hidden;margin-bottom:2px;padding:6px 4px 3px 6px;width:431px; 
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
background-color: #5B74A8;
border: 1px solid #29447e;
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
        <li><a class="admin_login"href="admin/index.php">To'ataa</a></li>
		<li><a class="scheduler_login"href="admin/index3.php">sagantaa baasaa</a></li>
        <li><a class="user_login"href="admin/index2.php">Fayyadamtoota (Dep head) </a></li>
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

	    <li><a href="contact us.php" class="contact us"><i class="icon-music icon-large"></i>lakkofsaa bilbilaa</a></li>
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
    <div class="active item"><img src="img/BHU430.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/BHU430.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/BHU430.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/BHU430.gif" width="1090" height="150"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>



<div class="hero-unit-bud">
<div class="jkl">
</div>
<ul class="nav nav-tabs"> 
  
  <li class="active"><a class="about" href="#profile" data-toggle="tab"><font color="white"><i class=" icon-info-sign icon-large"></i></font><font color="orange">wa'ee BHU</a></font></li>
   <li><a class="site" href="#settings" data-toggle="tab"><font color="white"><i class="icon-sitemap icon-large"></i></font><font color="orange">suraa Bule Hora yuuniversitii</a></font></li>
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
<img src="img/bhu.jpg"width="40" height="40"/><span><?php echo $msgcontent; ?></span>

<div style="margin-top:10px; margin-left: 58px;">
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

<div class="comment_ui">

<div class="comment_text">
<div  class="comment_actual_text"><img src="img/lo.png" width="32" height="32" /><div id="sssss"><?php echo $comment; ?></div></div>
</div>

</div>

<?php } ?>
<div class="dddd">
<div>
<img src="img/lo.png" width="32" height="32" />
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
  <li class="active"><a href="#"><font color="white"><i class="icon-book icon-large"></i></font><font color="orange">Waa’ee BHU</font></a></li>
  <li><a data-toggle="modal" href="#mission"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Ergama </font></a></li>
  <li><a data-toggle="modal" href="#vision"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">Mul’ata</font></a></li>
  <li><a data-toggle="modal" href="#mandate">	<font color="white"><i class=" icon-star icon-large"></i></font>
  <font color="orange">Projectii addunyaa</font></a></li>



</ul>
</ul>
  
  </div>


  <div class="history_chmsc">
  <p>
  <h2 align="left"><strong><font color="#3123dc">Waa’ee Bule Hora yuuniversitii</strong></h2></font>
  </p>
  <hr>
  <p><font color="#3123dc">Yuuniversitiin  Bule Hora yuuniversitoota jira keessaa tokko ta’ee federaala rippaabilika  Ethiopian kan hundeeffame barumsa olaanaa kennuuf akkasumas akkasumas tajaajila  qorannoo fi uummataaf kan kennuudha. Dalaga kana kennuuf yuuniversitiin kun  bara 2003 sirna baruuf barsiisuu barattoota 350’n koollejjii barnootaa  shan isaanis koollejjii saayinsii fi teekinoolojii, koollejjii saayinsii uumamaa,koollejjii saayinsii  hawwaasaa,koollejji qonnaa,koollejjii bizineesii fii ikoonoomiksii . Yuuniversitichi dursa sadarkaa barnootaa 21’n bara 2004 kana  eegale gaafa ta’u amma garuu istaafii 230 ol kan qabuu fi istaafii  gargaartuu 100 isaa kana kessaa qaba.  yerooo ammaa kana  yuuniversitichi koolleejjii ja'a qaba isaanis koolleejjii qonnaa,  teknooloojii fi enjiineringii, saayinsii uumamaa, saayinsii hawaasaa,fayyaa,fiqabeenyaa  fi diinagdeetiin barattoota 5500 tajaajila kennaa jira.</p></font>
  <p align="justify">&nbsp;</p>
  </div>
 </div>
 </div>
  </div>

  <div class="tab-pane" id="settings">
                  
				  

<div class="hero-unit">
<div id="myCarousel2" class="carousel slide">
   <!-- Carousel items -->
  <div class="carousel-inner">
<div class="active item"><img src="img/2nd national reaserch symposium in BHU.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/Abaa Gadaa.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/bhu around cafteria.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/BHU grsduation hall.jpg" width="1090" height="500"></div>
	  <div class="item"><img src="img/BHU student class room.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/bhu library.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/bhu window.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/graduation 2008.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/g.jpg" width="1090" height="500"></div>
    <div class="item"><img src="img/slide0.jpg" width="1090" height="500"></div>
	<div class="item"><img src="img/slide1.JPG" width="1090" height="500"></div>
	<div class="item"><img src="img/slide3.jpg" width="1090" height="500"></div>
	<div class="item"><img src="img/slide4.jpg" width="1090" height="500"></div>
	<div class="item"><img src="img/slide5.jpg" width="1090" height="500"></div>
	<div class="item"><img src="img/8.jpg" width="1090" height="500"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel2" data-slide="next">&rsaquo;</a>
</div>
</div>
  </div>

  
    
</div>
	</div>



<?php include('footer.php'); ?>


</div>
</div>


</body>


<div class="modal hide fade" id="pic">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
<div class="turn">
</div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> <font color="#3123dc">Ergama </h3></font>
	  </div>
	  <div class="modal-body">
	 <p></p>
	  <p>
<font color="#3123dc">Dorgomaa haaraa kan qorannoo rakkina  biyyaa furu oomishuu fi tajaajila barbaachisaa uummataaf  karaa barnootaa kennuu akkasumas qoranno hawaasummaa fi  diinagdee guddina saffisiisuu.  
	  </p> </font>  

	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
		<div class="modal hide fade" id="vision">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3><font color="#3123dc"> Mul’ata</h3></font>
	  </div>
	  <div class="modal-body">
	 <p></p>
  <p><font color="#3123dc">Yuuniversiticha bara 2022tti karaa inni ittiin guddina diinagdee uummataa baha afirikaa keessatti galmeessisu qajeelchuu.
</p></font>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>

		
				<div class="modal hide fade" id="mandate">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 <p><font color="#3123dc">Projectii addunyaa</p></font>

	 <ol>
	 <li><font color="#3123dc">Barattootni bule hora yuuniversitii  proojektii giddu galeessaa hundaa’e kanaan milka’aniiru.</li>
	 <li>Proojektii magariisa kaampaasii bule hora </li>
	 <li>Proojectii dandeettii humna namaa ijaaruu bule hora yuuniversitii </li>
	 </ol></font>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
	
		
						

 



