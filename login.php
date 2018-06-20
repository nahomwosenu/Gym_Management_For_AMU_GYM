
<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>http://gym.amu.edu.et/login</title>
<head>
<link rel="icon" href="image/logo.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
function change_char(){
	
	var pass = document.getElementById("pw");
	var checkbox = document.getElementById("cb");
	
	if(pass.type == "password"){
		pass.type = "text";
		checkbox.checked = true;
	}else{
		pass.type = "password";
		checkbox.checked = false;
	}
}
	</script>
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php"><img src="image/logo.png" width="130px" height="120px"><img width="750px" height="120px" src="image/gym1.PNG" ></a>
<div id="Menus">		
		<ul>
			<li ><a href="index.php">Home</a></li>
			<li ><a href="about.php">About Us</a></li>
			<li ><a href="schedule.php">Schedule</a></li>
			<li ><a href="homenews.php">News and Events</a></li>
			<li><a href="contacts.php">Contact Us</a></li>
			<li><a href="guidance.php">Guidance</a></li>
			<li><a href="help.php">Helps</a></li>
			<li ><a href="site.php">Site Map</a></li>
				<li><a href="signup.php">Sign up</a></li>
			<li class="active"><a href="login.php">Login</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="300px" src="image/gymimage.png">
</td>
</tr>
<tr><td valign="top" width="220px">
<table style="border:1px solid #3366CC;border-radius:5px" width="220px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Date and Time</font></th>
</tr>

<tr>
<td>
<center>
<script LANGUAGE="JavaScript">
monthnames = new Array("January","Februrary","March","April","May","June","July","August","September","October","November","Decemeber");
var linkcount=0;
function addlink(month, day, href) {
var entry = new Array(3);
entry[0] = month;
entry[1] = day;
entry[2] = href;
this[linkcount++] = entry;
}
Array.prototype.addlink = addlink;
linkdays = new Array();
monthdays = new Array(12);
monthdays[0]=31;
monthdays[1]=28;
monthdays[2]=31;
monthdays[3]=30;
monthdays[4]=31;
monthdays[5]=30;
monthdays[6]=31;
monthdays[7]=31;
monthdays[8]=30;
monthdays[9]=31;
monthdays[10]=30;
monthdays[11]=31;
todayDate=new Date();
thisday=todayDate.getDay();
thismonth=todayDate.getMonth();
thisdate=todayDate.getDate();
thisyear=todayDate.getYear();
thisyear = thisyear % 100;
thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
if (((thisyear % 4 == 0) 
&& !(thisyear % 100 == 0))
||(thisyear % 400 == 0)) monthdays[1]++;
startspaces=thisdate;
while (startspaces > 7) startspaces-=7;
startspaces = thisday - startspaces + 1;
if (startspaces < 0) startspaces+=7;
document.write("<table border=2 bgcolor=ddeeaa ");
document.write("bordercolor=black><font color=black>");
document.write("<tr><td colspan=7><center><strong>" 
+ monthnames[thismonth] + " " + thisyear 
+ "</strong></center></font></td></tr>");
document.write("<tr>");
document.write("<td align=center>Su</td>");
document.write("<td align=center>M</td>");
document.write("<td align=center>Tu</td>");
document.write("<td align=center>W</td>");
document.write("<td align=center>Th</td>");
document.write("<td align=center>F</td>");
document.write("<td align=center>Sa</td>"); 
document.write("</tr>");
document.write("<tr>");
for (s=0;s<startspaces;s++) {
document.write("<td> </td>");
}
count=1;
while (count <= monthdays[thismonth]) {
for (b = startspaces;b<7;b++) {
linktrue=false;
document.write("<td>");
for (c=0;c<linkdays.length;c++) {
if (linkdays[c] != null) {
if ((linkdays[c][0]==thismonth + 1) && (linkdays[c][1]==count)) {
document.write("<a href=\"" + linkdays[c][2] + "\">");
linktrue=true;
      }
   }
}
if (count==thisdate) {
document.write("<font color='F00000'><strong>");
}
if (count <= monthdays[thismonth]) {
document.write(count);
}
else {
document.write(" ");
}
if (count==thisdate) {
document.write("</strong></font>");
}
if (linktrue)
document.write("</a>");
document.write("</td>");
count++;
}
document.write("</tr>");
document.write("<tr>");
startspaces=0;
}
document.write("</table></p>");
</script>
<script language="JavaScript" type="text/javascript">
// This array holds the "friendly" day names
var day_names = new Array(7)
day_names[0] = "Sunday"
day_names[1] = "Monday"
day_names[2] = "Tuesday"
day_names[3] = "Wednesday"
day_names[4] = "Thursday"
day_names[5] = "Friday"
day_names[6] = "Saturday"
// This array holds the "friendly" month names
var month_names = new Array(12)
month_names[0] = "January"
month_names[1] = "February"
month_names[2] = "March"
month_names[3] = "April"
month_names[4] = "May"
month_names[5] = "June"
month_names[6] = "July"
month_names[7] = "August"
month_names[8] = "September"
month_names[9] = "October"
month_names[10] = "November"
month_names[11] = "December"
// Get the current date
date_now = new Date()
// Figure out the friendly day name
day_value = date_now.getDay()
date_text = day_names[day_value]
// Figure out the friendly month name
month_value = date_now.getMonth()
date_text += " " + month_names[month_value]
// Add the day of the month
date_text += " " + date_now.getDate()
// Add the year
date_text += ", " + date_now.getFullYear()
// Get the minutes in the hour
minute_value = date_now.getMinutes()
if (minute_value < 10) {
    minute_value = "0" + minute_value
}
// Get the hour value and use it to customize the greeting
hour_value = date_now.getHours()
if (hour_value == 0) {
   greeting = "Good morning, "
   time_text = " at " + (hour_value + 12) + ":" + minute_value + " AM"
}
else if (hour_value < 12) {
    greeting = "Good morning!"
    time_text = " at " + hour_value + ":" + minute_value + " AM"
}
else if (hour_value == 12) {
    greeting = "Good afternoon!"
    time_text = " at " + hour_value + ":" + minute_value + " PM"
}
else if (hour_value < 17) {
    greeting = "Good afternoon!"
    time_text = " at " + (hour_value - 12) + ":" + minute_value + " PM"
}
else {
    greeting = "Good evening!"
    time_text = " at " + (hour_value - 12) + ":" + minute_value + " PM"
}
document.write(greeting + "  " + date_text + time_text)

</script>
<body>
<form name="where"> 
<select name="city" size="1" onchange="updateclock(this);"> 
<option value="" selected>Local time</option>
<option value="0">London GMT</option> 
<option value="1">Rome</option>
<option value="7">Bangkok</option>
<option value="8">Hong Kong</option>
<option value="9">Tokyo</option> 
<option value="10">Sydney</option>
<option value="-8">San Francisco</option> 
<option value="-5">New York</option>
</select>
<script language="JavaScript">
if (document.all||document.getElementById)
document.write('<span id="worldclock" style="font:bold 25px Arial;"></span><br>')

zone=0;
isitlocal=true;
ampm='';

function updateclock(z){
zone=z.options[z.selectedIndex].value;
isitlocal=(z.options[0].selected)?true:false;
}

function WorldClock(){
now=new Date();
ofst=now.getTimezoneOffset()/60;
secs=now.getSeconds();
sec=-1.57+Math.PI*secs/30;
mins=now.getMinutes();
min=-1.57+Math.PI*mins/30;
hr=(isitlocal)?now.getHours():(now.getHours() + parseInt(ofst)) + parseInt(zone);
hrs=-1.575+Math.PI*hr/6+Math.PI*parseInt(now.getMinutes())/360;
if (hr < 0) hr+=24;
if (hr > 23) hr-=24;
ampm = (hr > 11)?"PM":"AM";
statusampm = ampm.toLowerCase();

hr2 = hr;
if (hr2 == 0) hr2=12;
(hr2 < 13)?hr2:hr2 %= 12;
if (hr2<10) hr2="0"+hr2

var finaltime=hr2+':'+((mins < 10)?"0"+mins:mins)+':'+((secs < 10)?"0"+secs:secs)+' '+statusampm;
if (document.all)
worldclock.innerHTML=finaltime
else if (document.getElementById)
document.getElementById("worldclock").innerHTML=finaltime
else if (document.layers){
document.worldclockns.document.worldclockns2.document.write(finaltime)
document.worldclockns.document.worldclockns2.document.close()
}
setTimeout('WorldClock()',1000);
}
window.onload=WorldClock
</script>
</form>
</center>
</td>
</tr>


</table>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="220px">
<tr>
<th bgcolor="#000000" style="border-radius:5px"><font color="white">Arba Minch University</font></th>
</tr>
<tr><td>
<marquee bgcolor="#ffffff" behavior="scroll" direction="up" id="mymarquee">
<p>
<font color ="green"> <H3>Type your username and Password in order to login the System</h3>
</p>
</marquee>
</td></tr>
<tr><td>
<input type="button" class="button_example" value="Stop Marquee" onClick="document.getElementById('mymarquee').stop();">&nbsp;&nbsp;
<input  class="button_example" type="button" value="Start Marquee" onClick="document.getElementById('mymarquee').start();">
</td></tr>
<tr>
<td>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<br><br>
<p>
<!-- Main Content-->
<?php
	   if (isset($_POST['log'])){ 
	    $username=$_POST['user'];
	    $password=$_POST['pass'];
	    $sql ="SELECT * FROM member WHERE username='$username' AND password='$password'";
	    $result = mysql_query($sql); 
		// TO check that at least one row was returned 
		$rowCheck = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		 if($row['user_type']=='admin'){ 
		$_SESSION['member_id']=$row['member_id'];
         echo "<script>window.location='admin.php';</script>";
		}	
			
			else if($row['user_type']=='trainee'){
			require('Pay.php');
			$payment=checkPayment($username);
			if($payment=='complete'){
		$_SESSION['member_id']=$row['member_id'];
		echo "<script>window.location='trainee.php';</script>";
		}
		else{
			echo "<script>window.alert('Sorry, you need to complete the payment before logging to our Gym');</script>";
		}
         
		}
			else if($row['user_type']=='accountant'){
		$_SESSION['member_id']=$row['member_id'];
		echo "<script>window.location='accountant.php';</script>";
         
		}
		else if($row['user_type']=='trainer'){
		$_SESSION['member_id']=$row['member_id'];
		echo "<script>window.location='trainer.php';</script>";
		}
		else {
		
		echo'<br>';
       echo'  <p class="wrong"><img src="image/error.png">&nbsp;Check Your username or/and Password!</p>';                                
		   echo' <meta content="10;login.php" http-equiv="refresh" />';
		}
		}
    mysql_close($conn);

    ?>
<table class="log_table" align="center" >
<form action="login.php" method="post">
<tr bgcolor="#336699" ><th colspan="2" ><font color="#ffffff">Member's Login</font></th></tr>
<tr>
<td>
<label>User Name</label>
</td>
<td>
<input type="text" name="user" required x-moz-errormessage="Enter Username" placeholder ="username"/>
</td>
</tr>
<tr>
<td>
<label>Password</label>
</td>
<td>
<input type="password" name="pass" required x-moz-errormessage="Enter password" id="pw" placeholder ="***********"/>
</td>
</tr>
<tr><td></td><td><input type="checkbox" name="checkbox" id="cb" onClick="change_char();"> Show Characters</td></tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="log" value="login" class="button_example"/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<a href="forget.php">forget password?</a>
</td>
</tr>
</form>

</table>
<!--End of main content-->
</td>
</tr>
<tr>
<td align="center" height="30px" style="border:1px solid #3366CC; background-color:black" colspan="2">
<font color="white" face="arial" size="2px">AMU &copy;&nbsp;2018&nbsp;All Copy Right Reserved     &nbsp;&nbsp;&nbsp;&nbsp;<a href="developer.php"><font color ="reed"><b> Developed by Infomation  Techonology Group 3<b></font> </a></font></td>
</tr>
</table>
</center>
</body>
</html>
