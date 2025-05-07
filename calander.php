
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
  <li><a href="faq.php" class="faq" id="faq"><i class="icon-question-sign icon-large"></i>FAQ</a></li>
  <li><a href="feedback.php" class="feedback"><i class="icon-comment icon-large"></i>Feedback</a></li>
  <li class="dropdown" id="language"> <a href="#"
          class="language"
          data-toggle="dropdown"> <i class="icon-flag icon-large"></i>Language <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="Amharic"href="index_amharic.php">Amharic</a></li>
        <li><a class="Oromifa" href="index_oromifa.php">Oromifa</a></li>
      </ul>
    <li><a href="contact us.php" class="contact us"><i class="icon-comment icon-large"></i>contact us</a></li>

	  
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
  <li class="active"><a href="#calander" data-toggle="tab"><font color="red">
  <i class="icon-pc-sign icon-large"></i></font><font color="orange">calander</font></a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="hero-unit-y">
  
  
  
<div class="size2">
<font color="orange"> TIME:</font>
<font color="orange">
<?php
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font> 
</div>
<!--
<span id="quick_login" class="button2">WELLCOME TO BULE HORA UNIVERSITY ONLINE CLASSROOM SCHEDULING SYSTEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php?action=login"><font color="de1234">Login</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="registerstudent.php?action=registerstudent"><font color="de1234">Register</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span> 
-->	
<!-- yellow one css and js-->
<link rel="stylesheet" href="time2/time3/pickmeup.css" type="text/css" />
<script type="text/javascript" src="time2/tiem3/jquery.js"></script>
<script type="text/javascript" src="time2/tiem3/jquery.pickmeup.js"></script>
<script type="text/javascript" src="time2/tiem3/demo.js"></script>
<div id="content">			
<div id="container">
<center><h2><u><i class="glyphicon glyphicon-calendar" ></i>&nbsp;CALANDER VIEW</u></h2></center><br />
<div align="center">
<?php
if (isset($_GET['year'])) {
    $year = $_GET['year'];
} else {
    $year = '';
} // if
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
<p>Enter Year: <input type="text" name="year" size="28" value="Enter the year(like 2000) display one year" />
<button type="submit" class="submit" /><i class="glyphicon glyphicon-hand-right" ></i>&nbsp;GO</button></p>
<?php
echo "<u>Year:</u>&nbsp;<b>$year</b>";
// validate year
if (isset($_GET['year'])) {
    $valid = TRUE;
    if (!ereg('^[[:digit:]]+$', $year)) {
        echo "Year must be an integer";
        $valid = FALSE;
    } // if
    if ($year < 1970) {
        echo "Year cannot be less than 1970";
        $valid = FALSE;
    } // if
    if ($year > 2037) {
        echo "Year cannot be greater than 2037";
        $valid = FALSE;
    } // if
} // if
?>
</form>
<?php
if (isset($_GET['year']) and ($valid)) {
    // start at 1st day of 1st month in this year
    $dd = 1;
    $mm = 1;
    $ccyy = $year;
    // convert components into date format
    $date = strtotime("$ccyy-$mm-$dd");
    // create array of date information
    $today = getdate($date);
    // build array of dates until the year changes
    $date_array = array();
    do {
        build_array($ccyy, $mm, $dd);
    } while($ccyy == $year);

    // transfer contents of $date-array into an HTML table
    print_array($date_array);
} // if
?>
</div>
<?php
function build_array(&$ccyy, &$mm, &$dd)
// build an array containing every date for the selected year
{
global $date;
global $today;
global $date_array;
static $month_no;
static $week_no;

// at change of month reset to week 1 of 6
if ($mm > $month_no) {
    $month_no = $mm;
    $week_no  = 1;
} // if

$dow = $today['wday'];  // get day of week (0 = Sunday, 6 = Saturday)
if ($dow == 0) {
    $dow = 7;                // convert Sunday to day 7
} // if

// add to array
$date_array[$month_no][$week_no][$dow] = $dd;

// after day 7 increment to next week
if ($dow == 7) {
    $week_no = $week_no + 1;
} // if

// increment date to next day
$date = strtotime("+1 day", $date);

// create array of date information
$today = getdate($date);

// extract ccyy, mm, dd
$ccyy = $today['year'];
$mm   = $today['mon'];
$dd   = $today['mday'];

return;

} // build_array

function print_array($date_array) {

// set of array for day-of-week
$day_names = array(1 => '<b>MON</b>','<b>TUE</b>','<b>WED</b>','<b>THU</b>','<b>FRI</b>','<b>SAT</b>','<b>SUN</b>');
// set up array of month names
$month_names = array(1 => '<u><b>J A N U A R Y</b></u>',
                          '<u><b>F E B R U A R Y</b></u>',
                          '<u><b>M A R C H</b></u>',
                          '<u><b>A P R I L</b></u>',
                          '<u><b>M A Y</b></u>',
                          '<u><b>J U N E</b></u>',
                          '<u><b>J U L Y</b></u>',
                          '<u><b>A U G U S T</b></u>',
                          '<u><b>S E P T E M B E R</b></u>',
                          '<u><b>O C T O B E R</b></u>',
                          '<u><b>N O V E M B E R</b></u>',
                          '<u><b>D E C E M B E R</b></u>');

echo "<table border='0'>\n";
echo '<colgroup width="50">';
echo '<colgroup span="6" width="20">';
echo '<colgroup width="20">';
echo '<colgroup span="6" width="20">';
echo '<colgroup width="20">';
echo '<colgroup span="6" width="20">';
echo '<colgroup width="20">';
echo "<colgroup span='6' width='20'>\n";

// print the array in 3 rows with 4 months in each row
for ($row = 1; $row <= 3; $row++) {
   // identify the starting month in current row
   $first = set_start_month($row);
   // process one row at a time (the 1st line contains the month names)
   echo "<tr class='month'>\n";
   for ($m = $first; $m <= $first+3; $m++) {
      echo "<td>&nbsp;</td><td colspan='6'>" .$month_names[$m] ."</td>\n";
   } // for
   echo "</tr>\n";
   // output a line for each of the 7 days of the week
   for ($dow = 1; $dow <= 7; $dow++) {
      echo "<tr class='$day_names[$dow]'>\n";
      // step through each of the 4 months in this row
      for ($m = $first; $m <= $first+3; $m++) {
         // output the details for 4 consecutive months
         // 1st cell identifies the day of week (first month of the 4)
         if ($m == $first) {
            echo "<td class='dayname'>" .$day_names[$dow] ."</td>";
         } else {
            echo "<td>&nbsp;</td>"; // not first month, so cell is empty
         } // if
         // the next 6 cells are for the dates that fall on that day
         for ($week = 1; $week <= 6; $week++) {
            if (isset($date_array[$m][$week][$dow])) {
               echo "<td>" .$date_array[$m][$week][$dow] ."</td>";
            } else {
               echo "<td>&nbsp;</td>";
            } // if
         } // for
      } // for
      echo "\n</tr>\n";
   } // for
   // output a blank line at the end of each row of months
   echo "<tr><td colspan='28'>&nbsp;</td></tr>\n";
} // for

echo "</table>\n";

return;

} // print_array

function set_start_month($row) {
// identify the first month in each of the three rows
    if ($row == 1) {
        $first = 1;
    } elseif ($row == 2) {
        $first = 5;
    } else {
        $first = 9;
    } // if
    return $first;

} // set_start_month
?> 
<link rel="stylesheet" href="time2/time3/css/pickmeup.css" type="text/css" />
<script type="text/javascript" src="time2/time3/js/jquery.js"></script>
<script type="text/javascript" src="time2/time3/js/jquery.pickmeup.js"></script>
<script type="text/javascript" src="time2/time3/js/demo.js"></script>
<center>
<section>
	<h2><u><i class="glyphicon glyphicon-calendar" ></i>&nbsp;ALL CALANDER SHOW</u></h2>
	<article>
		<div class="3-calendars"></div>
	</article>
</section>
</center>
</div>
</div>
<<?php include('footer.php'); ?>
</div>


</body>


</html>
	