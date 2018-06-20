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

<title>Trainer page</title>
<SCRIPT language='Javascript'>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><img src="image/logo.png" width="110px" height="100px"><img width="650px" height="100px" src="image/trainer.png" ></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="department.php">Home</a></li>
			<li><a href="attendance.php" >Take Attendace</a></li>
			<li><a href="attendance.php" >Generate Attendace</a></li>
			<li><a href="comment.php">Main't Request</a></li>
			<li><a href="logout.php" >Logout</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="300px" src="image/banner.jpg">
</td>
</tr>
<tr>
<td valign="top" width="200px">
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Manage User Account</font></th>
</tr>
<tr>
<td>  <table border="0">
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="createtrainer.php">Create Trainer Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="edittrainee.php">Edit Trainer Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="registerequ.php">Post Training</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="edit.php">View Training</a></td>
</tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="#000000" style="border-radius:5px"><font color="white">Additional Links</font></th>
</tr>
<tr><td></td></tr>
<tr>
<td>
<img src="image/bullet.png" width="20px">&nbsp;<a href="ad_schedlu.php">Schedule</a>
</td>
</tr>
<tr>
<td>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>
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
<font color="#336699"><center><h3>System Administrator</h3></center></font>
<p>
<!-- Main Content-->
<!--PHP Script-->
<?php
 if(isset($_POST['ok']))
 {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $user_id=$_POST['user_id'];
 $phone=$_POST['phone'];
 $utype=$_POST['utype'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $cpass=$_POST['cpass'];
 
if($pass==$cpass)
{
$query="SELECT * FROM member where username='$user'";
$resultw=mysql_query($query);
$count=mysql_num_rows($resultw);
		if($count>1)
		{
echo'  <p align="center"><font color="red" size="3">
<p class="wrong">User Name is used by another user</p>';
echo'<meta content="15;create.php" http-equiv="refresh"/>';
}
else
{
$sql="INSERT INTO member (fname,lname,user_id,phone,user_type,username,password)
VALUES
('$fname','$lname','$user_id','$phone','$utype','$user','$pass')";

if (!mysql_query($sql,$conn))
  {
         echo'  <p class="wrong">Already Registered</p>';
  die('Error: '.'Already Exist'.mysql_error());
  }
  else
  {
echo'<p class="success"> Account is created successfully</p>';                                
		   echo' <meta content="6;create.php" http-equiv="refresh" />';	
}}}
else
{
echo'<br><br><br>';
       echo'  <p class="wrong">Your Password Does not match!!</p>';
	   echo'<meta content="10;create.php" http-equiv="refresh" />';
	   }
	   }
mysql_close($conn)
?>    


<!--End of script-->
<table class="log_table" align="center" >
<form action="create.php" method="post" onsubmit='return formValidation()'>
<tr bgcolor="#336699" ><th colspan="2" ><font color="#ffffff">Create User Account Form</font><a href="admin.php"><img align="right"src="image/clos.png" title="close"></a></th></tr>
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
<input type="text" name="fname" id='fname' required placeholder="Enter First Name"/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Last Name</label>
</td>
<td>
<input type="text" name="lname" id='lname' required placeholder="Enter Last Name"/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User ID</label>
</td>
<td>
<input type="text" name="user_id" id='user_id' required placeholder="Enter ID"/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Phone No</label>
</td>
<td>
<input type="text" name="phone" id='phone' onKeyPress="return isNumberKey(event)" maxlength='12' required placeholder="Enter phone"/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User Type</label>
</td>
<td>
<select name="utype" required />
<option>--select</option>
<option value="admin">Admin</option>
<option value="Trainer">Trainer</option>
<option value="registrar">Trainee</option>
<option value="dname">Department</option>
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
<font color="red">*</font><label>Confirm Password</label>
</td>
<td>
<input type="password" name="cpass" required/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="ok" value="Save" class="button_example"/>
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
