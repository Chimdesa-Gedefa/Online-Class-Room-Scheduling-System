<?php 
include('dbcon.php');
include('session.php'); 



if (isset($_POST['save']))
{


$acadamic_year=$_POST['acadamic_year'];
$semester=$_POST['semester'];
$department=$_POST['department'];
$year_section=$_POST['year_section'];

$Monday=$_POST['Monday'];
$Tuesday=$_POST['Tuesday'];
$Wednesday=$_POST['Wednesday'];
$Thursday=$_POST['Thursday'];
$Friday=$_POST['Friday'];
$day=$Monday." ".$Tuesday." ".$Wednesday." ".$Thursday." ".$Friday;

$course=$_POST['course'];
$time_start=$_POST['time_start'];
$time_end=$_POST['time_end'];
$instractor=$_POST['instractor'];
$room=$_POST['room'];

// conflick on instractor 
$instractor_query=mysql_query("select * from schedule where
	day like '%Monday%' and 
	time_start='$time_start' and 
    time_end='$time_end' and 
	instractor='$instractor'
") or die(mysql_error());
$instractor_row=mysql_fetch_array($instractor_query);
$count1=mysql_num_rows($instractor_query);
$instractor_1=$instractor_row['instractor'];

$instractor_query=mysql_query("select * from schedule where
	day like '%Tuesday%' and  
	time_start='$time_start' and 
    time_end='$time_end' and 
	instractor='$instractor'
") or die(mysql_error());
$instractor_row=mysql_fetch_array($instractor_query);
$count1=mysql_num_rows($instractor_query);
$instractor_1=$instractor_row['instractor'];

$instractor_query=mysql_query("select * from schedule where
	day like '%Wednesday%' and 
	time_start='$time_start' and 
    time_end='$time_end' and 
	instractor='$instractor'
") or die(mysql_error());
$instractor_row=mysql_fetch_array($instractor_query);
$count1=mysql_num_rows($instractor_query);
$instractor_1=$instractor_row['instractor'];

$instractor_query=mysql_query("select * from schedule where
	day like '%Thursday%' and 
	time_start='$time_start' and 
    time_end='$time_end' and 
	instractor='$instractor'
") or die(mysql_error());
$instractor_row=mysql_fetch_array($instractor_query);
$count1=mysql_num_rows($instractor_query);
$instractor_1=$instractor_row['instractor'];

$instractor_query=mysql_query("select * from schedule where
	day like '%Friday%' and 
	time_start='$time_start' and 
    time_end='$time_end' and 
	instractor='$instractor'
") or die(mysql_error());
$instractor_row=mysql_fetch_array($instractor_query);
$count1=mysql_num_rows($instractor_query);
$instractor_1=$instractor_row['instractor'];










// conflict on year_section
$year_section_query=mysql_query("select * from schedule where
day like '%Monday%' and
time_start='$time_start' and 
time_end='$time_end' and 
year_section='$year_section'
") or die(mysql_error());
$year_section_row=mysql_fetch_array($year_section_query);
$count2=mysql_num_rows($year_section_query);
$year_section_1=$year_section_row['year_section'];

$year_section_query=mysql_query("select * from schedule where
day like '%Tuesday%' and  
time_start='$time_start' and 
time_end='$time_end' and 
year_section='$year_section'
") or die(mysql_error());
$year_section_row=mysql_fetch_array($year_section_query);
$count2=mysql_num_rows($year_section_query);
$year_section_1=$year_section_row['year_section'];

$year_section_query=mysql_query("select * from schedule where
day like '%Wednesday%' and  
time_start='$time_start' and 
time_end='$time_end' and 
year_section='$year_section'
") or die(mysql_error());
$year_section_row=mysql_fetch_array($year_section_query);
$count2=mysql_num_rows($year_section_query);
$year_section_1=$year_section_row['year_section'];

$year_section_query=mysql_query("select * from schedule where
day like '%Thursday%' and 
time_start='$time_start' and 
time_end='$time_end' and 
year_section='$year_section'
") or die(mysql_error());
$year_section_row=mysql_fetch_array($year_section_query);
$count2=mysql_num_rows($year_section_query);
$year_section_1=$year_section_row['year_section'];

$year_section_query=mysql_query("select * from schedule where
day like '%Friday%' and 
time_start='$time_start' and 
time_end='$time_end' and 
year_section='$year_section'
") or die(mysql_error());
$year_section_row=mysql_fetch_array($year_section_query);
$count2=mysql_num_rows($year_section_query);
$year_section_1=$year_section_row['year_section'];








// conflick on room 
$room_query=mysql_query("select * from schedule where
day like '%Monday%' and 
time_start='$time_start' and 
time_end='$time_end' and 
room='$room'
") or die(mysql_error());
$room_row=mysql_fetch_array($room_query);
$count3=mysql_num_rows($room_query);
$room_1=$room_row['room'];

$room_query=mysql_query("select * from schedule where
day like '%Tuesday%' and
time_start='$time_start' and 
time_end='$time_end' and 
room='$room'
") or die(mysql_error());
$room_row=mysql_fetch_array($room_query);
$count3=mysql_num_rows($room_query);
$room_1=$room_row['room'];

$room_query=mysql_query("select * from schedule where
day like '%Wednesday%' and  
time_start='$time_start' and 
time_end='$time_end' and 
room='$room'
") or die(mysql_error());
$room_row=mysql_fetch_array($room_query);
$count3=mysql_num_rows($room_query);
$room_1=$room_row['room'];

$room_query=mysql_query("select * from schedule where
day like '%Thursday%' and 
time_start='$time_start' and 
time_end='$time_end' and 
room='$room'
") or die(mysql_error());
$room_row=mysql_fetch_array($room_query);
$count3=mysql_num_rows($room_query);
$room_1=$room_row['room'];

$room_query=mysql_query("select * from schedule where
day like '%Friday%' and 
time_start='$time_start' and 
time_end='$time_end' and 
room='$room'
") or die(mysql_error());
$room_row=mysql_fetch_array($room_query);
$count3=mysql_num_rows($room_query);
$room_1=$room_row['room'];




if($count1 == 1){ ?>
<script type="text/javascript">
alert('<?php echo $instractor_1." ".'Already  have a Schedule on this Time'; ?>');
//window.location="add_schedule_cs.php";
history.back();
</script>

<?php
}
else if($count2 == 1){ ?>
<script type="text/javascript">
alert('<?php echo $year_section_1." ".'Students already  have a Schedule on this Time'; ?>');
//window.location="add_schedule_cs.php";
history.back();
</script>

<?php
}


else if($count3 == 1){ ?>
<script type="text/javascript">
alert('<?php echo $room_1." ".' Room already  have a Schedule on this Time'; ?>');
//window.location="add_schedule_cs.php";
history.back();
</script>

<?php
}


if ($course='--select--'|| $time_start='--select--' || $time_end='--select--'|| $instractor='--select--' || $room='--select--'|| 
$acadamic_year='--select--'|| $semester='--select--'|| $department='--select--'|| $year_section='--select--')
{
?>

<script type="text/javascript">
alert('you have to select and fill all information');
history.back();
</script>
<?php

}


else{

mysql_query("insert into schedule (department,semester,acadamic_year,year_section,course,instractor,room,day,time_start,time_end)
VALUES('$department','$semester','$acadamic_year','$year_section','$course','$instractor','$room','$day','$time_start','$time_end')")or die(mysql_error());

?>
<script type="text/javascript">
alert('Class Schedule sucssfully Created!');
window.location="schedule_cs.php";
</script>

<?php

}
}
?>