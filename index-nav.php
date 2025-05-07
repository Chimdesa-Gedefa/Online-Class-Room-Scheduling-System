	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="branded">
		<img src="img/bhu.png" width="100" height="90">
 	</a> 
	<a class="brand">
	 <h2>Online Class Room Scheduling System</h2>
	 <div class="chmsc_nav"><font size="4" color="white">Bule Hora University</font></div>
 	</a>
<div class="time_top">	
<font color="orange">
  <?php
 $Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font>
<br>
	<a href="index.php" class="btn btn-warning"><i class="icon-arrow-left icon-large"></i>&nbsp;Back to Home</a>
	
</div>
	</div>
	</div>
	</div>