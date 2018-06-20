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
<title>Create User Account</title>
<head>
<link rel="icon" href="image/logo.png"/>
<link rel="icon" href ="image/logo.png">
<title>System Administrator</title>
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><img src="image/logo.png" width="110px" height="100px"><img width="650px" height="100px" src="image/admin.png" ></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="admin.php">Home</a></li>
			<li ><a href="report.php">Genrate Report</a></li>
			<li ><a href="view_main't requested.php">Maintanance Requested</a></li>
			<li ><a href="newsand.php">Post News and Events</a></li>
			<li ><a href="deletenews.php">Delete News</a></li>
			<li><a href="logout.php" onClick="isConfirmlog();">Logout</a></li>
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
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="create.php">Create User Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="edit.php">Edit User Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="registerequ.php">Register Equipement</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="editequipment.php">Edit Equipement</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="adminchange.php">Change Password</a></td>
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
	var username = document.getElementById('user');
	var password = document.getElementById('pass');
	var phone= document.getElementById('phone');
if(isAlphabet(firstname, "please enter Your First name in letters only")){
if(lengthRestriction(firstname, 3, 30,"for your First name")){
if(isAlphabet(lastname, "please enter Your Last name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your Last name")){
if(lengthRestriction(phone, 10, 10,"for your phone")){
if(isAlphanumeric(password,"Please Enter the Correct Password (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(password, 5, 10,"for your Password")){
if(isAlphanumeric(username,"Please Enter the Correct Username(!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(username, 5, 30,"for your username")){
	return true;
	}}
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
 $phone=$_POST['phone'];
 $age=$_POST['age'];
 $email=$_POST['email'];
 $utype=$_POST['utype'];
 $gender=$_POST['gender'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $cpass=$_POST['cpass'];
 $img=$_FILES['file']['tmp_name'];
 
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
	
$sql="INSERT INTO member (fname,lname,phone,age,email,user_type,gender,username,password,profile)
VALUES
('$fname','$lname','$phone','$age','$email','$utype','$gender','$user','$pass','$img')";

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
<form action="create.php" method="post" enctype ="multipart/form-data" onsubmit='return formValidation()'>
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
<input type="number_format" name="phone" id='phone' onKeyPress="return isNumberKey(event)" maxlength='12' required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Age</label>
</td>
<td>
<input name="age" size="12" onkeypress="return isNumberKey(event)" type="text" placeholder ="Onlynumber" pattern="[0-90-9\\]+" title="Please enter Only Numbers" required> </td></td>
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
<font color="red">*</font><label>User Type</label>
</td>
<td>
<select name="utype" required />
<option value="admin">Adminstrator</option>
<option value="trainer">Trainer</option>
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
<input type="reset" value="Clear" class="button_example"/>
</td>
</tr>
<tr>
<td><br>
</td>
<td>
<font color="red">*</font> is Mandatory Field.
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
