
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
 <li class="dropdown" id="Class Schedule"> <a href="#"
          class="Class Schedule"
          data-toggle="dropdown"> <i class="icon-search icon-large"></i><font color="#fff">sagantaa barnootaa</font><b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a href="class_schedule.php"class="class_schedule"><i class="icon-search icon-large"></i>sagantaa barnootaa Regularidhaaf</a></li>
   
        <li><a  href="class_schedule1.php"class="class_schedule"><i class="icon-search icon-large"></i>sagantaa barnootaa warra weakend</a></li>
       
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
 <li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>Baniinsa <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="admin_login"href="admin/index1.php">To'ataa</a></li>
		<li><a class="scheduler_login"href="admin/index31.php">sagantaa baasaa</a></li>
        <li><a class="user_login"href="admin/index21.php">Fayyadamtoota (Dep head) </a></li>
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
<div class="jkl">
</div>

<ul class="nav nav-tabs"> 
  
  <li class="active"><a class="year_section" href="#"><font color="white"><i class=" icon-lock icon-small"></i></font><font color="white">baraafi daree </a></font></li>
   <li><a class="instractor" href="search_instractor_schedule.php" ><font color="white"><i class="icon-pencil icon-small"></i></font><font color="white">barsiisaa</a></font></li>
   <li ><a class="room" href="search_room_schedule.php"><font color="white"><i class="icon-home icon-small"></i> daree</font></a></li>
</ul>


<div class="tab-content">





<div class="tab-pane active" id="year_section">
<div class="hero-unit-y">
 <h2>baraa fi daree barbaaduu</h2>
hunda isaa guuti.

<hr>

 <form id="save_voter" class="form-horizontal" method="POST" action="search_year_section_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">baraa fi daree:</label>
    <div class="controls">
   <select name="year_section" class="span333" required="required">
	<option>--Select--</option>
	<?php $year_section_query=mysql_query("select * from year_section order by department ASC")or die(mysql_error());
while($year_section_row=mysql_fetch_array($year_section_query)){
	?>
	<option><?php echo $year_section_row['year_section']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semesteera:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">bara barnootaa:</label>
    <div class="controls">
   <select name="acadamic_year" class="span333">
<?php $acadamic_year_query=mysql_query("select * from acadamic_year")or die(mysql_error());
while($acadamic_year_row=mysql_fetch_array($acadamic_year_query)){
 ?>
<option><?php echo $acadamic_year_row['acadamic_year']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
</div>
</div>
  
 
  
  
  
</div>
</div>






</div>
</div>


</body>


