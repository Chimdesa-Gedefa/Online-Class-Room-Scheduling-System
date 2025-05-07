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
  <li  ><a href="faq.php" class="faq" id="faq"><i class="icon-question-sign icon-large"></i>HELP/FAQ</a></li>
  <li class="active"><a href="feedback.php" class="feedback"><i class="icon-comment icon-large"></i>Feedback</a></li>
    <li><a href="contact us.php" class="contact us"><i class="icon-comment icon-large"></i>contact us</a></li>
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

<ul class="nav nav-tabs"> 
  <li class="active"><a href="#home" data-toggle="tab"><font color="white"><i class="icon-question-sign icon-large"></i></font><font color="orange"><img src="fed.jpg"</font></a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

  <font color="#3123dc">
Fill the filds and Write your Comment here
<hr>
  <fieldset>
	   <form id="feedback" class="form-horizontal" method="POST" action="feedback.php" >	
  
	
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Name:</label></font>
    <div class="controls">
   <input type="text" name="name" class="Name_hover" id="span9001" required="required"> 
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01" >Email:</label>
    <div class="controls">
  <input type="email" name="email"  class="email_hover" id="span9001" required="required"><font color="white">*</font>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Comment:</label>
    <div class="controls">
<textarea rows="6" cols="10" input="" type="text" name="comment" required="required"></textarea> 
    </div>
    </div>
	
	
	<div class="control-group">
 
	</font>
	  	<center> 
		
		<button id="save_voter" class="btn btn-primary" name="submit"><i class="icon-email"></i>Submit</button>
	<button id="reset" class="btn btn-primary" name="reset" type="reset" <i class="icon-remove">Clear</button></center>
    
	
<div class="control-group">
<div class="controls">
	
    </div>
    </div>
	
    </fieldset>
    </form>
 


</body>


</html>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h4>  </h4>
	  </div>
	
	  <div class="modal-body">


</div>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>

<?php

if(isset($_POST['submit']))
{
$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];



if(is_numeric($name) || is_numeric($email) || is_numeric($comment))

{ ?>
<script type="text/javascript">
alert('All information must be character strings');
history.back();
</script>


<?php
}else{
$query="insert into feedback(name,email,comment, date)
value('$name','$email','$comment',now())";
mysql_query($query);
?>
<script type="text/javascript">
alert('Thank you for your feedback!.');
window.location="index.php";
</script>


<?php 

}

}

?>

