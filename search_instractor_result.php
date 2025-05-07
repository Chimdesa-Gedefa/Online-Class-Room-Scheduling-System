
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>



</head> 
<body>

<div class="coat">
<div class="wrapper_home">
<div class="hero-unit-bud">
<ul class="nav nav-tabs"> 


  <li class="active"><a href="" data-toggle="tab"><font color="white"><i class="icon-search icon-large"></i></font><font color="orange">Search instractor Result</font></a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">
  
 
<?php 
// get values from inputs.
if (isset($_POST['save'])){
$instractor=$_POST['instractor'];
$semester=$_POST['semester'];
$acadamic_year=$_POST['acadamic_year'];
{

if(($instractor=='--Select--') || ($semester=='--Select--'))
{
echo"<script> alert('YOU HAVE TO SELECT INSTRUCTOR NAME AND SEMESTER TO SEARCH');history.back();</script>";
exit;

}
$search_query_all=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_query=mysql_query("select * from schedule where instractor like '%$instractor%' and type='' and day1='MWF'  and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_query2=mysql_query("select * from schedule where instractor like '%$instractor%'and type='' and day1='TTh'  and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_query1=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$count=mysql_num_rows($search_query);
$count2=mysql_num_rows($search_query2);
$row=mysql_fetch_assoc($search_query1);
$row_all=mysql_fetch_assoc($search_query_all);

$id=$row_all['schedule_id'];

?> 
<div class="teph">
<img src="img/lo.png" width="80" height="80">
</div>
<h2>Class Schedule</h2>
	<a class="btn btn-primary"  href="search_instractor_schedule.php">  <i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
<hr>
<font color="orange">
<h3>Name:&nbsp;<?php echo $row['instractor']; ?><br> 
Semeter:&nbsp;<?php echo $row['semester']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Acadamic year:&nbsp;<?php echo $row['acadamic_year'];?></h3> </font>
<hr>
<table width="1001" class="table table-striped table-bordered table-condensed" border="1">
  <thead>
    <tr>
      <th>Time</th>
      <th>Monday</th>
	  <th>Tuesday</th>
      <th>Wednesday</th>
	  <th>Thursday</th>
      <th>Friday</th>
      </tr>
  </thead>

  <tbody>
  
	  <?php
	  $search_query=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%'")or die(mysql_error());
$search_rows=mysql_fetch_array($search_query);



if (mysql_num_rows($search_query)>0)
{
?>
    <tr>

      <td width="161">1:30 AM - 2:20 AM	</td>
	
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and day like '%Monday%' and time_start='1:30 AM' and time_end='2:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='1:30 AM' and time_end='2:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='1:30 AM' and time_end='2:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	    <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='1:30 AM' and time_end='2:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	    <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='1:30 AM' and time_end='2:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	  </tr>
	

	  
	  
	 
	  <tr>
      <td width="161">2:30 AM - 3:20 AM </td>
       <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Monday%' and time_start='2:30 AM' and time_end='3:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='2:30 AM' and time_end='3:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='2:30 AM' and time_end='3:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='2:30 AM' and time_end='3:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='2:30 AM' and time_end='3:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	  </tr>
	  
	  
	        <tr>
      <td width="161">3:30 AM - 4:20 AM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Monday%' and time_start='3:30 AM' and time_end='4:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='3:30 AM' and time_end='4:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='3:30 AM' and time_end='4:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>
	    <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='3:30 AM' and time_end='4:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='3:30 AM' and time_end='4:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	  </tr>
	  
	  
	    
	        <tr>
      <td width="161">4:30 AM - 5:20 AM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Monday%' and time_start='4:30 AM' and time_end='5:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='4:30 AM' and time_end='5:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='4:30 AM' and time_end='5:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='4:30 AM' and time_end='5:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='4:30 AM' and time_end='5:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
   	  </tr>
	  
	
        <tr>
      <td width="161">5:30 AM - 6:20 AM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Monday%' and time_start='5:30 AM' and time_end='6:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='5:30 AM' and time_end='6:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='5:30 AM' and time_end='6:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='5:30 AM' and time_end='6:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='5:30 AM' and time_end='6:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	  </tr>	
	  
	  
	          <tr>
      <td width="161">9:30 AM - 10:20 AM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Monday%' and time_start='9:30 AM' and time_end='10:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='9:30 AM' and time_end='10:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='9:30 AM' and time_end='10:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='9:30 AM' and time_end='10:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='9:30 AM' and time_end='10:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	  </tr>	
	  
	  
	  	          <tr>
      <td width="161">10:30 AM - 11:20 AM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Monday%' and time_start='10:30 AM' and time_end='11:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='10:30 AM' and time_end='11:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='10:30 AM' and time_end='11:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='10:30 AM' and time_end='11:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='10:30 AM' and time_end='11:20 AM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
	  </tr>	
	  
	  
	  	  
	  
	  	          <tr>
      <td width="161">11:30 AM - 12:20 PM </td>
      <td width="160">
	  <?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Monday%' and time_start='11:30 AM' and time_end='12:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?>	  </td>
	   <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Tuesday%' and time_start='11:30 AM' and time_end='12:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>

	    <td width="161"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Wednesday%' and time_start='11:30 AM' and time_end='12:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="159"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Thursday%' and time_start='11:30 AM' and time_end='12:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
	 echo '<br>';	 
	 echo $row['room'];
	  ?></td>
      <td width="160"><?php 
	  $result=mysql_query("select * from schedule where instractor like '%$instractor%' and semester like '%$semester%' and acadamic_year like '%$acadamic_year%' and type='' and day like '%Friday%' and time_start='11:30 AM' and time_end='12:20 PM' ")or die(mysql_error());
	  $row=mysql_fetch_array($result);
	 echo $row['course'];
	 echo '<br>';
	 echo $row['year_section']; 
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
alert(' <?php echo 'NO SCHEDULE FOUND FOR INSTRACTOR '."  ". $instractor ." IN THE ". $semester."  ". 'SEMESTRE '."  ".' PLEASE CHECK US ANOTHER TIME!'; ?>');
history.back();
</script>
<?php 
 }
}
}
?>

<p>Dreafted By Group 4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved by: Mr. </p>
</br>


<button  onClick="window.print()" class="btn btn-info" name="save"><i class="icon-print icon-large"></i>&nbsp;Print Schedule</button>
	</br>
	</br>
	



	


  
  

	</div>	
	</div>	
	</div>	
	</div>	
<?php include('footer.php'); ?>
</div>
</div>


</body>
</html>
