<?php
include("connection.php");
session_start();
if(isset($_SESSION['member_id']))
 {
 $mail=$_SESSION['member_id'];
  
 }
 else 
 {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="image/logo.png"/>
<title>Create Trainee Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">

<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="trainer.php"><img src="image/logo.png" width="110px" height="100px"><img width="700px" height="100px" src="image/trainer.png" ></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="trainer.php">Home</a></li>
			<li><a href="attendance.php" >Take Attendace</a></li>
			<li><a href="record.php" >Generate Attendace</a></li>
			<li><a href="maintenance.php">Main't Request</a></li>
			<li><a href="view_feedback.php">View Comments</a></li>
			<li><a href="cpayement.php">Check Payement</a></li>
			<li><a href="logout.php" >Logout</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="250px" src="image/trainer.JPg">
</td>
</tr>
<tr>
<td valign="top" width="200px">
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Tasks</font></th>
</tr>
<tr>
<td>  <table border="0">
<link href="css/stylesheet1.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div class="dropdown">
<img src="image/bullet.png" width="20px">&nbsp;<button onclick="myFunction()" class="dropbtn">Post Trainning</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="text.php">Text</a>
    <a href="audio.php">Audio</a>
    <a href="video.php">Video</a>
  </div>
</div>

<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="updatetraining.php">Update Training</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="apo_change.php">Change Password</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="createtrainee.php">Create Trainee Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="updatetrainee.php">Edit Trainee Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="apo_change.php">view paid trainee</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="add schedule.php">Add Schedule</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="update schedule.php">Update Schedule</a></td>
</tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
<!--Form Validation-->
<script type='text/javascript'>
function formValidation(){
//assign the fields
    var firstname=document.getElementById('fname');
    var lastname= document.getElementById('lname');
	var user_id = document.getElementById('user_id');
	var username = document.getElementById('user');
	var password = document.getElementById('pass');
	var phone= document.getElementById('phone');
if(isAlphabet(firstname, "please enter Your First name in letters only")){
if(lengthRestriction(firstname, 3, 30,"for your First name")){
if(isAlphabet(lastname, "please enter Your Last name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your Last name")){
if(isAlphanumeric(user_id,"Please Enter the Correct ID No (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(user_id, 3, 10,"for your ID No")){
if(lengthRestriction(phone, 10, 10,"for your phone")){
if(isAlphanumeric(password,"Please Enter the Correct Password (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(password, 5, 10,"for your Password")){
if(isAlphanumeric(username,"Please Enter the Correct Username(!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(username, 5, 10,"for your username")){
	return true;
	}}}}
	}
	}
	}}
	}}}
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z\/]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>


<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Trainer</h3></center></font>
<p>
<!-- Main Content-->
<!--PHP Script-->
<?php
 if(isset($_POST['ok']))
 {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $phone=$_POST['phone'];
 $age=$_POST['age'];
 $email=$_POST['email'];
 $worktype=$_POST['worktype'];
 $utype=$_POST['utype'];
 $gender=$_POST['gender'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $cpass=$_POST['cpass'];
 $account=$_POST['account'];
 $regDate=date("yy/mm/dd");
$img=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$_FILES['file']['name']);
 require_once('Pay.php');
  $result=pay($account,$worktype,$user);
  if($result===false){
  	die("<script>window.alert('Error: This account number does not exist, please enter a valid account');</script>");
  }
if($pass==$cpass)
{
$query="SELECT * FROM member where username='$user'";
$resultw=mysql_query($query);
$count=mysql_num_rows($resultw);
		if($count>1)
		{
echo'  <p align="center"><font color="red" size="3">
<p class="wrong">User Name is used by another user</p>';
echo'<meta content="15;createtrainee.php" http-equiv="refresh"/>';
}
else
{
$sql="INSERT INTO member (fname,lname,phone,age,email,worktype,user_type,gender,username,password,profile,payment,registration_date,last_payment) VALUES
('$fname','$lname','$phone','$age','$email','$worktype','$utype','$gender','$user','$pass','$img','waiting for approval','$regDate','0')";

if (!mysql_query($sql,$conn))
  {
         echo'  <p class="wrong">Already Registered</p>';
  die('Error: '.'Already Exist'.mysql_error());
  }
  else
  {

echo'<p class="success"> Account is created successfully, But you need to approve the monthly payment fee before you are able to login. Please login to your bank account and activate the payment.</p>';                                
		   echo' <meta content="12;createtrainee.php" http-equiv="refresh" />';	
}}}
else
{
echo'<br><br><br>';
       echo'  <p class="wrong">Your Password Does not match!!</p>';
	   echo'<meta content="10;createtrainee.php" http-equiv="refresh" />';
	   }
	   }
mysql_close($conn)
?>    


<!--End of script-->
<table class="log_table" align="center" >
<form action="createtrainee.php" method="post" enctype ="multipart/form-data" onsubmit='return formValidation()'>
<tr bgcolor="#336699" ><th colspan="2" ><font color="#ffffff">Create Trainee Account Form</font><a href="trainer.php"><img align="right"src="image/clos.png" title="close"></a></th></tr>
<tr>
<td><br>
</td>
<td>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>First Name</label>
</td>
<td>
<input type="text" name="fname" id='fname' required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Last Name</label>
</td>
<td>
<input type="text" name="lname" id='lname' required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Phone No</label>
</td>
<td>
<input type="number" name="phone" id='phone' onKeyPress="return isNumberKey(event)" maxlength='12' required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Age</label>
</td>
<td>
<input name="age" size="12" onkeypress="return isNumberKey(event)" type="text" placeholder ="Onlynumber" pattern="[0-90-9\\]+" title="Please enter Only Numbers" required> 
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Email</label>
</td>
<td>
<input class="g-40 s-g-100" type="email"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"  name="email" value="" title="Please enter Your Email" />
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Work</label>
</td>
<td>
<select name="worktype" required/>
<option value="student">Student</option>
<option value="staff">Staff</option>
<option value="community">Community</option>
<option value="guest">Guest</option

</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Gym Type</label>
</td>
<td>
<select name="tgym" required>
<option value="erobics">Areobics</option>
<option value="volleyball">VolleyBall</option>
<option value="bodymass">BodyMass AM</option>
<option value="fitteness">Fitteness</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User Type</label>
</td>
<td>
<select name="utype" required />
<option value="trainee">Trainee</option>
</select>
</td>
<tr>
<td>
<font color="red">*</font><label>Gender</label>
</td>
<td>
<select name="gender" required />
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</td>
<tr>
<td>
<font color="red">*</font><label>User Name</label>
</td>
<td>
<input type="text" name="user" id='user' required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Password</label>
</td>
<td>
<input type="password" name="pass" id='user' maxlength='10' required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Confirm Pass</label>
</td>
<td>
<input type="password" name="cpass" required/>
</td>
</tr>

<tr>
<td>
<font color="red">*</font><label>Bank Account:</label>
</td>
<td>
<input type="number" name="account" required/>
</td>
</tr>

<tr>
<td>
<font color="red">*</font><label>Profile</label>
</td>
<td>
<input type="file" name="file" accept="image/*" required/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="ok" value="Register" class="button_example"/>
<input type="reset" value="Cancel" class="button_example"/>
</td>
</tr>
<tr>
<td><br>
</td>
<td>
<font color="red">*</font> is Manadatory Field.
</td>
</tr>
</form>
</table>
<br><br><br><br>
<!--End of main content-->
</td>
</tr>
<tr>
<td align="center" height="30px" style="border:1px solid #3366CC; background-color:black" colspan="2">
<font color="white" face="arial" size="2px">AMU &copy;&nbsp;2018&nbsp;All Copy Right Reserved</font></td>
</tr>
</table>
</center>
</body>
</html>
