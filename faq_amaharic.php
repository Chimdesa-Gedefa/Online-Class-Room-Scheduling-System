
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
  <li> <a href="index.php"><i class="icon-home icon-large"></i></a></li> 
  <li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>መግቢያ <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="admin_login"href="admin/index.php">የአድሚን</a></li>
		<li><a class="scheduler_login"href="admin/index3.php">የፕሮግራም አውጪ</a></li>
        <li><a class="user_login"href="admin/index2.php">ተጠቃሚ (የዲፓርትመንት ሓላፊ)</a></li>
      </ul>
  <li  class="active"><a href="faq.php" class="faq" id="faq"><i class="icon-question-sign icon-large"></i>በተደጋጋሚ የሚነሱ ጥ</a></li>
  <li><a href="feedback.php" class="feedback"><i class="icon-comment icon-large"></i>አስተያየት</a></li>
    <li><a href="contact us.php" class="contact us"><i class="icon-comment icon-large"></i> ፈገሀሀሀሀሀሀሀ</a></li>
<li class="dropdown" id="language"> <a href="#"
          class="language"
          data-toggle="dropdown"> <i class="icon-flag icon-large"></i>ቋንቋ መቀየሪያ <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="Amharic"href="index_amharic.php">Amharic</a></li>
        <li><a class="Oromifa" href="index_oromifa.php">ኦሮምኛ</a></li>
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
<font color="#3123dc">
<div class="hero-unit-bud">

<ul class="nav nav-tabs"> 
  <li class="active"><a href="#home" data-toggle="tab"><font color="white"><i class="icon-question-sign icon-large"></i></font><font color="orange"><img src="ff.jpg"width="120" height="50"</font></a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">

  <div class="tab-pane active" id="profile">
<ul class="nav nav-tabs">
  <li class="active"><a href="#"><font color="white"><i class="icon-question-sign icon-large"></i></font><font color="orange">1. How to search Schedul?</font></a></li>
  <li><a  href="#2"><font color="white"><i class="icon-question-sign icon-large"></i></font><font color="orange">2. How to Print schedul?</font></a></li>
  <li><a  href="#3"><font color="white"><i class="icon-question-sign icon-large"></i></font><font color="orange">3. How to User register?</font></a></li>
    <li><a  href="#3"><font color="white"><i class="icon-home icon-large"></i></font><font color="orange">4.General interface of this system</font></a></li>
</ul>
</ul>
  </div>
<hr>
  <font color="#3123dc">
  <div class="mm" id="1">
  <h2 align="left">1. How to search Schedule?</h2>
  <hr>
  <img src="img/hellp.gif">
  </div>
  
  <hr>
    <div class="mm" id="2">
  <h2 align="left">2. How to Print schedule?</h2>
  <hr>
  <img src="img/printaa.gif">
  </div>
  
  
  <hr>
    <div class="mm" id="3">
   <h2 align="left">3.How to register?</h2>
  <hr>
  <img src="img/regi.gif">
    <hr>
    <div class="mm" id="3">
   <h2 align="left">4.General interface of this system</h2>
  <hr>
  <img src="img/helpo.gif">
  </div>
  </div>
 </div>
 </div>
  </div>
</div>
</font>
</font>
<?php include('footer.php'); ?>
</div>
</body>
</html>




