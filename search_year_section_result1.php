
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>



</head> 
<body>

<div class="coat">
<div class="wrapper_home">
<div class="hero-unit-bud">
<ul class="nav nav-tabs"> 


  <li class="active"><a href="" data-toggle="tab"><font color="white"><i class="icon-search icon-large"></i></font><font color="orange">Search Year  section Result</font></a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">
  
 
<?php 

if (isset($_POST['save'])){
$year_section=$_POST['year_section'];
$semester=$_POST['semester'];
$acadamic_year=$_POST['acadamic_year'];
{

if(($year_section=='--Select--') || ($semester=='--Select--'))
{
echo"<script> alert('YOU HAVE TO SELECT YEAR AND SEMESTER TO SEARCH');history.back();</script>";
exit;

}

$search_query_all=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_query=mysql_query("select * from schedule where year_section like '%$year_section%' and type='' and day1='MWF'  and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_query2=mysql_query("select * from schedule where year_section like '%$year_section%'and type='' and day1='TTh'  and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_query1=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$count=mysql_num_rows($search_query);
$count2=mysql_num_rows($search_query2);
$row=mysql_fetch_assoc($search_query1);
$row_all=mysql_fetch_assoc($search_query_all);

$id=$row_all['schedule_id'];

?> 
<div class="teph">
<img src="img/bhu.jpg" width="80" height="80">
</div>
<h2>Class Schedule</h2>
	<a class="btn btn-primary"  href="class_schedule.php">  <i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
<hr>
<font color="orange">
<h3>Year Section:<?php echo $row['year_section']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Semeter:&nbsp;<?php echo $row['semester']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Acadamic year:&nbsp;<?php echo $row['acadamic_year'];?><h3> </font> 
<hr>
<table width="1001" class="table table-striped table-bordered table-condensed" border="1">
  <thead>
    <tr>
      <th>Time</th>
      <th>saturday</th>
	  <th>sunday</th>
      
      </tr>
  </thead>

  <tbody>
  
	  <?php
	  $search_query=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_rows=mysql_fetch_array($search_query);


if (mysql_num_rows($search_query)>0)
{
?>
    <tr>

      <td width="161">2:00 PM - 3:50 PM	</td>
	
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and day like '%saturday%' and time_start='2:00 PM' and time_end='3:50 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='2:00 PM' and time_end='3:50 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    
	  </tr>
	

	  
	  
	 
	  <tr>
      <td width="161">4:00 PM - 5:20 PM </td>
       <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%saturday%' and time_start='4:00 PM' and time_end='5:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='4:00 PM' and time_end='5:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    
	  </tr>
	  
	  
	        <tr>
      <td width="161">5:30 PM - 6:30 PM</td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%saturday%' and time_start='5:30 PM ' and time_end='6:30 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='5:30 PM ' and time_end='6:30 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    
	  </tr>
	  
	  
	    
	        <tr>
      <td width="161">7:30 PM - 8:20 PM  </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%saturday%' and time_start='7:30 PM' and time_end='8:20 PM ' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='7:30 PM' and time_end='8:20 PM ' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

   	  </tr>
	  
	
        <tr>
      <td width="161">8:30 PM - 9:20 PM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%saturday%' and time_start='8:30 PM' and time_end='9:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='8:30 PM' and time_end='9:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    
	  </tr>	
	  
	  
	          <tr>
      <td width="161">9:30 PM - 10:10 PM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%saturday%' and time_start='9:30 PM ' and time_end='10:10 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='9:30 PM ' and time_end='10:10 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    
	  </tr>	
	  
	  
	  	          <tr>
      <td width="161">10:20 PM -10:50 PM</td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%saturday%' and time_start='10:20 PM' and time_end='10:50 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='10:20 PM' and time_end='10:50 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	   
	  </tr>	
	  
	  
	  	  
	  
	  	          <tr>
      <td width="161">11:20 PM -11:40 PM</td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%saturday%' and time_start='11:20 PM' and time_end='11:40 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where year_section like '%$year_section%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%sunday%' and time_start='11:20 PM' and time_end='11:40 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['instractor']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    
	  </tr>					
  </tbody>
</table>





<?php
}


else
{
?>
<script type="text/javascript">
alert(' <?php echo 'WE ARE VERY SORRY, NO SCHEDULE FOUND FOR '."  ". $year_section ." IN THE ". $semester."  ". 'SEMESTRE '."  ".' PLEASE CHECK US ANOTHER TIME!'; ?>');
history.back();
</script>
<?php  
}
}
}
?>
<p>Dreafted By Group 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved by: Mr. </p>
</br>

</br>

<button  onClick="window.print()" class="btn btn-info" name="save"><i class="icon-print icon-large"></i>&nbsp;Print Schedule</button>


	</br>
	</br>
	



			
			



  
  

	</div>	
	</div>	
	</div>	
	</div>
	
		
<?php  include('footer.php'); ?>
</div>
</div>


</body>

</html>
