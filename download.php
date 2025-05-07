<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
</head> 
<body background="img/div/sucss.jpg">

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
  <li class="active"> <a href="index.php"><i class="icon-home icon-large"></i>Home</a></li> 
   <li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>Login <b class="caret"></b> </a>
      <ul class="dropdown-menu">
          <li><a class="admin_login"href="admin/index.php">Admin</a></li>
		<li><a class="scheduler_login"href="admin/index3.php">Scheduler</a></li>
        <li><a class="user_login"href="admin/index2.php">User(Dep Head)</a></li>
      </ul>
  <li><a href="class_schedule.php" class="class_schedule"> <i class="icon-search icon-large"></i> Class Schedul</a></li> 
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
    <div class="item"><img src="img/bhu11.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu12.gif" width="1090" height="150"></div>
    <div class="item"><img src="img/bhu10.PNG" width="1090" height="150"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>

<div class="hero-unit-bud">

<ul class="nav nav-tabs"> 
  <li class="active"><a href="#contact us" data-toggle="tab"><font color="red">
  <i class="icon-pc-sign icon-large"></i></font><font color="orange">download</font></a></li>
</ul>


<?php include('footer.php'); ?>
</div>


</body>


</html>

