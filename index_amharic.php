
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
background-color: #5B74A8;
border: 1px solid #29447e;
padding:2px 16px;
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
<font color="white">የክፍል ፕሮግራም ማሳያ</font></a>
  <li class="active"> <a href="index_amharic.php"><i class="icon-home icon-large"></i>መነሻ</a></li> 
   <li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>መግቢያ<b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="admin_login"href="admin/index.php">የአድሚን</a></li>
		<li><a class="scheduler_login"href="admin/index3.php"> የፕሮግራም አውጪ </a></li>
        <li><a class="user_login"href="admin/index2.php">ተጠቃሚ (የዲፓርትመንት ሓላፊ)</a></li>
      </ul>
  <li><a href="faq.php" class="faq" id="faq"><i class="icon-question-sign icon-large"></i>በተደጋጋሚ የሚነሱ ጥ.</a></li>
  <li><a href="feedback.php" class="feedback"><i class="icon-comment icon-large"></i>አስተያየት</a></li>
  <li class="dropdown" id="language"> 
  <a href="#"
          class="language"
          data-toggle="dropdown"> <i class="icon-flag icon-large"></i>ቋንቋ መቀየሪያ
      <ul class="dropdown-menu">
        <li><a class="English"href="index.php"> እንግሊዘኛ</a></li>
        <li><a class="Oromifa" href="index_oromifa.php">ኦሮምኛ </a></li>
      </ul>
   <li><a href="contact us.php" class="contact us"><i class="icon-music icon-large"></i>ስልክ ቁጥር</a></li>

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
    <div class="item"><img src="img/bhu11.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu12.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu11.gif" width="1090" height="150"></div>
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
  
  <li class="active"><a class="about" href="#profile" data-toggle="tab"><font color="white"><i class=" icon-info-sign icon-large"></i></font><font color="orange">ስለ ቡሌ ሆራ ዩኒቨርስቲ</a></font></li>
   <li><a class="site" href="#settings" data-toggle="tab"><font color="white"><i class="icon-sitemap icon-large"></i></font><font color="orange">ከርታ እና የክፍል ፕሆቶ</a></font></li>
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
<input name="mcomment" type="text" placeholder="ስለ ማስታወቂያው አስተያየት ካለህ..." style="height: 24px; border:1px solid #BDC7D8; padding:3px; border-width: 1px 0px 1px 1px; width:302px;" required="required"/>
<input id="buts" name="" type="submit" value="Post" />
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
<body bgcolor="#E6E6E6">
<img src="img/lo.png" width="100" height="25">
</body>
  <li><a data-toggle="modal" href="#mission"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">ስለ ቡሌ ሆራ  ዩኒቨርስቲ</font></a></li>
  <li><a data-toggle="modal" href="#vision"><font color="white"><i class=" icon-list-alt icon-large"></i></font><font color="orange">ራዕይ</font></a></li>
  <li><a data-toggle="modal" href="#mandate">	<font color="white"><i class=" icon-star icon-large"></i></font>																<font color="orange">አለም አቀፋዊ እቅዶች </font></a></li>


</ul>
</ul>
</div>


  <div class="history_chmsc">
  <p>
  <h2><font color="#3123dc">ስለ ቡሌ ሆራ  ዩኒቨርስቲ</h2></font>
  </p>
  <hr>
  <p><font color="#3123dc">ቡሌ ሆራ ዩኒቨርስቲ በፍራል ዲሞክራቲክ ሪፐብሊክ ኦፍ ኢትዮጵያ የትምህርት ፣ የጥናት እና የምርምር አገልግሎት ለመስጠት በቅርቡ ከተቋቋሙት የትምህርት የከፍተኛ የትምህርት ተቋማት አንዱ ነው፡፡ </p>
  <p align="justify">ቡሌ ሆራ ዩኒቨርስቲም ይህንን አገልግሎቱን የጀመረው በ2003የትምህርት ዘመን 350 ተማሪዎችን በ ሲስት ፋካሊቲ መበያዝ ነበር እነሱም፡-</p>
  <p align="justify">ፋካሊቲ ኦፍ ኢዱኬሽን</p>
  <p align="justify">ፋካሊቲ ኦፍ ቢዝነስ አንድ ኦኮኖሚክስ</p>
  <p align="justify">ድራይ ላንድ አግሪካልቸር የ 12፤ 3፤ እና 2 ዲፓርትመንቶችን እንደ አቀማመጣቻው በመያዝ ነበር</p>
  <p align="justify">በ2008/9 የትምህርት ዘመን ግን ካሪኩለሙን በመቀየር ፋካሊቲውን በሁለት በመክፈል</p>
  <p align="justify">	የFaculity of Natural and Computational  Science እና </p>
  <p align="justify">የFaculity of Social Science and Humanities በማለት ተለይተዋል፡፡ </p>
  <p align="justify">ዩኒቨርስቲው በn 2006/07 ስራውን የጀመረው በ21 የአካዳሚክ ስታፍ ሰራተኞች ሲሆን አሁን ግን ከ 632 በላይ የአካዳሚክ ስታፍ ሰራተኞችና ከ494 የድጋፍ ሰጭ አባላት እንዲሁም በድምሩ 237 የሚሆኑ በለማስተርስ እና በፒኤች በትምህርት ላይ ያሉ የአካዳሚክ ስታፍ ሰራተኞ አሉት፡፡ </p>
  <p align="justify"> እዚህ ጋር ተያይዞ መጠቀስ ያለበት ከ67.8% የሚሆኑት የአካዳሚክ ስታፍ ሰራተኞች ባለ ማስተርስ ሲሆኑ 29.3% የሚሆኑት ደግሞ ባለ ድግሪ ናቸው፡፡</p>
  </font></div>
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
	    <a href="#" class="btn" data-dismiss="modal">ዝጋ</a>
		</div>
		</div>

<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> <font color="#3123dc">ስለ ቡሌ ሆራ  ዩኒቨርስቲ</h3></font>
	  </div>
	  	  <div class="modal-body">
	 <p></p>
  <p><font color="#3123dc">ቡሌ ሆራ ዩኒቨርስቲ በፍራል ዲሞክራቲክ ሪፐብሊክ ኦፍ ኢትዮጵያ የትምህርት ፣ የጥናት እና የምርምር አገልግሎት ለመስጠት በቅርቡ ከተቋቋሙት የትምህርት የከፍተኛ የትምህርት ተቋማት አንዱ ነው፡፡ </p>
   <p><font color="#3123dc">ቡሌ ሆራ ዩኒቨርስቲም ይህንን አገልግሎቱን የጀመረው በ2003የትምህርት ዘመን 350 ተማሪዎችን በ ሲስት ፋካሊቲ መበያዝ ነበር እነሱም፡-</p>
   <p><font color="#3123dc">ፋካሊቲ ኦፍ ኢዱኬሽን</p>
  <p><font color="#3123dc">ፋካሊቲ ኦፍ ቢዝነስ አንድ ኦኮኖሚክስ</p>
  <p><font color="#3123dc">ድራይ ላንድ አግሪካልቸር የ 12፤ 3፤ እና 2 ዲፓርትመንቶችን እንደ አቀማመጣቻው በመያዝ ነበር</p>
  <p><font color="#3123dc">በ2008/9 የትምህርት ዘመን ግን ካሪኩለሙን በመቀየር ፋካሊቲውን በሁለት በመክፈል</p>
   <p><font color="#3123dc">የFaculity of Natural and Computational  Science እና </p>
   <p><font color="#3123dc">የFaculity of Social Science and Humanities በማለት ተለይተዋል፡፡ </p>
  <p><font color="#3123dc">ዩኒቨርስቲው በn 2006/07 ስራውን የጀመረው በ21 የአካዳሚክ ስታፍ ሰራተኞች ሲሆን አሁን ግን ከ 632 በላይ የአካዳሚክ ስታፍ ሰራተኞችና ከ494 የድጋፍ ሰጭ አባላት እንዲሁም በድምሩ 237 የሚሆኑ በለማስተርስ እና በፒኤች በትምህርት ላይ ያሉ የአካዳሚክ ስታፍ ሰራተኞ አሉት፡፡ </p>
  <p><font color="#3123dc">እዚህ ጋር ተያይዞ መጠቀስ ያለበት ከ67.8% የሚሆኑት የአካዳሚክ ስታፍ ሰራተኞች ባለ ማስተርስ ሲሆኑ 29.3% የሚሆኑት ደግሞ ባለ ድግሪ ናቸው፡፡</p>
  </font>
   </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">ዝጋ</a>
		</div>
		</div>
		
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
	    <a href="#" class="btn" data-dismiss="modal">ዝጋ</a>
		</div>
		</div>
		
		<div class="modal hide fade" id="vision">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h4> <font color="#3123dc">ራዕይ</h4></font>
	  </div>
	  <div class="modal-body">
	 <p></p>
  <p><font color="#3123dc">በ2022 በምስራቅ አፍሪካ በአርብቶ አደር እና ..... እድገት መሪ መሆን ነው፡፡
</p></font>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">ዝጋ</a>
		</div>
		</div>

		
				<div class="modal hide fade" id="mandate">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>

	  <div class="modal-body">
	 <h5> <font color="#3123dc">አለም አቀፋዊ እቅዶች</h5></font>

	 <ol>
	 <li>ቡሌ ሆራ ዩኒቨርስቲ አሜሪካ ከሚገኘው ከቴክሳስ ዩኒቨርስቲ ጋር በመሆን የተማሪ ውጤት ተኮር ፕሮጀችት እየሰራ ይገኛል፡፡</li>
	 <li>
	 የ ቡሌ ሆራ ግቢን አረንጓዴ ማድረግ ፐሮጀክት</li>
	 <li>
	 ቡሌ ሆራ ዩኒቨርስቲ ከ"ጅማ" ዩኒቨርስቲ ጋር በመሆን የሰው ሃይል ግንባታ ላይ ፕሮጀችት እየሰራ ይገኛል፡፡</li></font>
	 </ol>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">ዝጋ</a>
		</div>
		</div>
		
		
						

		
		


 



