<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
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
  <li> <a href="index.php"><i class="icon-home icon-large"></i>Home</a></li> 
  <li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>Login <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="admin_login"href="admin/index.php">Admin</a></li>
		<li><a class="scheduler_login"href="admin/index3.php">Scheduler</a></li>
        <li><a class="user_login"href="admin/index2.php">User(Dep Head)</a></li>
      </ul>
  <li  class="active"><a href="class_schedule.php" class="class_schedule"> <i class="icon-search icon-large"></i> Class Schedul</a></li> 
  <li><a href="faq.php" class="faq" id="faq"><i class="icon-question-sign icon-large"></i>FAQ</a></li>
  <li><a href="feedback.php" class="feedback"><i class="icon-comment icon-large"></i>Feedback</a></li>
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
    <div class="item"><img src="img/bhu10.PNG" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu12.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu10.PNG" width="1090" height="150"></div>
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
  
  <li ><a class="class_schedule.php" href="class_schedule.php"><font color="white"><i class=" icon-lock icon-small"></i></font><font color="orange">Year Section </a></font></li>
   <li><a class="instractor" href="search_instractor_schedule.php" ><font color="white"><i class="icon-pencil icon-small"></i></font><font color="orange">Instructor</a></font></li>
   <li class="active"><a class="room" href="#"><font color="orange"><i class="icon-home icon-small"></i> Room</font></a></li>
   <li ><a class="Exam room" href="search_Exam room_schedule.php"><font color="reed"><i class="icon-pencil icon-small"></i>Exam Room</font></a></li>

   </ul>

<div class="tab-content">

<div class="tab-pane Active" id="room">
<div class="hero-unit-y">
<h2>Search Exam Rooms Schedule</h2>
Please select data on each field to filter.
<hr>
 <form id="save_voter" class="form-horizontal" method="POST" action="search_room_result.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Exam Rooms:</label>
    <div class="controls">
   <select name="room" class="span333">
	<option>--Select--</option>
	<?php $room_query=mysql_query("select * from room order by room_name ASC")or die(mysql_error());
while($room_row=mysql_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span333">
	<option>--Select--</option>
	<option>1st</option>
	<option>2nd</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Acadamic Year:</label>
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


<?php include('footer.php'); ?>

<?php 

if (isset($_POST['save'])){
$room=$_POST['room'];
$semester=$_POST['semester'];
$acadamic_year=$_POST['acadamic_year'];



$result=mysql_query("select * from schedule where room like '%$room%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());


}
?>

</div>
</div>


</body>


