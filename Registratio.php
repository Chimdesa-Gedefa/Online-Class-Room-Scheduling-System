<?php include('header.php'); include('session.php'); include('dbcon.php') ?>
<body>
<?php include('nav-top1.php'); ?>
    <div class="navbar navbar-fixed-top1">
    <div class="navbar-inner">
    <div class="container">
	<div class="marg">
    <ul class="nav">
  <li><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
    <li class="divider-vertical"></li>
  <li><a href="faculity.php"><i class="icon-list icon-large"></i>Entry</a></li>
   <li class="divider-vertical"></li>
     <li><a href="update_notifications.php"><i class="icon-table icon-large"></i>Notification</a></li>
     <li class="divider-vertical"></li>
     <li><a href="view_feedback.php"><i class="icon-comment icon-large"></i>View Feedbacks</a></li>
     <li class="divider-vertical"></li>
  <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
     <li class="divider-vertical"></li>
  <li class="active"><a href="user_account.php"><i class="icon-user icon-large"></i>User Account</a></li>
  <li class="divider-vertical"></li>
   <li><a href="backupDB.php"><i class="icon-save icon-large"></i>Backup DB</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>
</ul>
    </div>
    </div>
    </div>
    </div>
<div class="wrapper">
<div id="element" class="hero-body-schedule">

<h2><font color="white">User Account</font></h2>
	<a class="btn btn-primary"  href="user_account.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
<form id="save_voter" class="form-horizontal" method="POST" action="save_user.php">	
 <fieldset>
	</br>
	<div class="add_subject_user">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc" >First Name:</label></font>
    <div class="controls">
    <input type="text" name="first_name" class="first_name" id="span900" required="required">
    </div>
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Last Name:</label></font>
    <div class="controls">
    <input type="text" name="last_name" class="last_name" id="span900" required="required">
   	 </div>
     </div>
    
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">User Name:</label></font>
    <div class="controls">
    <input type="text" name="user_name" class="user_name" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Password:</label></font>
    <div class="controls">
    <input type="password" name="password" class="password" id="span900" required="required">
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Email:</label></font>
    <div class="controls">
    <input type="email" name="email" class="email" id="span900" required="required">
    </div>
    </div>
	

	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Department:</label></font>
    <div class="controls">
 <select name="department" class="span3"  id="span900" required="required">
 <option>--selct department--</option>
<?php $query=mysql_query("select * from department")or die(mysql_error);
while($dep=mysql_fetch_array($query))
{
 ?>
 
 <option><?php echo $dep['department_name'];?></option>
 <?php 
 }?>
	</select>
    </div>
    </div>

<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">User Type:</label></font>
    <div class="controls">
   <select name="user_type" class="span3"  id="span900" required="required">
	<option>User</option>
	<option>Scheduler</option>
	<option>Admin</option>
	</select>
    </div>
    </div>
	
	
	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Security Question:</label></font>
    <div class="controls">
	 <select name="security_q" class="span3"  id="span900" required="required">
   	<option>1. What is your beloved ancle name?</option>
	<option>2. Where you spend your childhood time? </option>
	<option>3. what was the name of your elementary school teacher?</option>
	<option>4. in which region BHU univeresity is found> </option>
	<option>5. what is the name of this system developers?</option>
	<option>6. What was the name of thir advisor while priparing this system?</option>

	</select>
	</div>
	</div>
	
	<div class="control-group">
    <label class="control-label" for="input01"><font color="#3123dc">Security Answer:</label></font>
    <div class="controls">
	<input type="text" name="security_a" class="span3" id="span900" required="required"value=""> 
   </div>
   </div>
	
	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
</fieldset>
</form>






	</div>	

<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
	
