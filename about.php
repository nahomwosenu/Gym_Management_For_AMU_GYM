<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>http://gym.amu.edu.et</title>
<link rel="icon" href="image/logo.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
<link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;margin-top:10px;">
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php"><img src="image/logo.png" width="130px" height="120px"><img width="750px" height="120px" src="image/gym1.PNG" ></a>
<div id="Menus">		
		<ul>		
			<li ><a href="index.php">Home</a></li>
			<li class="active"><a href="about.php">About Us</a></li>
			<li ><a href="schedule.php">Schedule</a></li>
			<li ><a href="homenews.php">News and Events</a></li>
			<li><a href="contacts.php">Contact Us</a></li>
			<li><a href="guidance.php">Guidance</a></li>
			<li><a href="help.php">Helps</a></li>
			<li ><a href="site.php">Site Map</a><li>
			<li><a href="signup.php">Sign up</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
</div>
</p>
</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">

    
    <div id="sliderFrame">
        <div id="slider">
            <img src="images/aman.jpg" />
            <img src="images/aman1.jpg" />
            <img src="images/aman2.jpg" />
            <img src="images/aman3.jpg" />
        </div>
        <!--Custom navigation buttons on both sides-->
        
        <!--nav bar-->
    </div>
</td>
</tr>
<tr>
<td valign="top" width="220px">
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
<tr>
<td>
</td>
</tr>

<table style="border:1px solid #3366CC;border-radius:5px" width="220px">
<tr>
<th bgcolor="#000000" style="border-radius:5px"><font color="white">Arba Minch University</font></th>
</tr>
<tr><td>
<marquee bgcolor="#ffffff" behavior="scroll" direction="up" id="mymarquee">
<p><h3><center><u>Mission</u></center></h3></p>
<p style='text-align:justify;'>
Arba Minch University is dedicated to provide quality education, conduct problem solving research and deliver need based community services.
</p>
<p><h3><center><u>Vision</u></center></h3></p>
<p style='text-align:justify;'>
Arba Minch University aspires to be one of the best university nationally and recognized internationally by 2020.
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

<td valign="top" style="border:1px solid #3366CC;border-radius:5px;width:670px; ">
<font color="#336699"><center><h3>Gymansium</h3></center></font>
<center>

<p><table><tr>
A gym, also referred as gymnasium, is an open air or covered location for gymnastics, athletics, and gymnastic services. The word is derived from the ancient Greek gymnasium. They are commonly found in athletic and fitness centers, and as activity and learning spaces in educational institutions.</p> 
</center>
<td>
<!--<p style="text-align:center">what</p>-->
</td></tr>
<tr>
<font color="0x4b0082"><center><h3>Benefit of Gymanisum</h3></center></font>
<ul>
<img width="500px" height="350px" src="image/benefit.PNG" ></a>
  </ul>
<font color="red"><center><h3>Types of Gym Sevices avaliable in AMIT</h3></center></font>
<ul >
                      <font color="red–violet">1.Aerobics</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Read More... <a href="areobics.php">Aerobic</a><br>
                     <font color="red–violet">2.Bodymass</font>  &nbsp;  Read More... <a href="body.php">BodyMass</a><br>
                     <font color="red–violet">3.Volleyball</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Read More...<a href="voy.php">Vollyball</a><br>
                     <font color="red–violet">4.Fiteness</font>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Read More...<a href="fit.php">Fiteness</a>
                      </ul>
  </ul>
 </p></td>
</tr></table>
</td>
</tr>
<tr>
<td align="center" height="30px" style="border:1px solid #3366CC; background-color:black" colspan="2">
<font color="white" face="arial" size="2px">AMU &copy;&nbsp;2018&nbsp;All Copy Right Reserved     &nbsp;&nbsp;&nbsp;&nbsp;<a href="developer.php"> <font color ="reed"><b> Developed by Infomation  Techonology Group 3<b></font> </a></font></td>
</tr>
</table>
</center>
</body>
</html>
