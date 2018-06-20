<?php
require_once('lib/password.php');
if(isset($_POST['register'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $position=$_POST['position'];
    $gymType=$_POST['gymtype'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $profile=$_POST['profile'];
    $account=$_POST['account'];
    $date=date('Y-m-d');
    $bluetooth=$_POST['bluetooth'];
    $question=$_POST['question'];
    $answer=$_POST['answer'];
    $password=password_hash($password,PASSWORD_DEFAULT);
    $query="insert into member(fname,lname,phone,age,email,worktype,tgym,user_type,gender,username,password,registration_date,profile,question,answer) values('$firstname','$lastname','$phone','$age','$email','$position','$gymType','trainee','$gender','$username','$password','$date','$profile','$question','$answer')";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    $query2="insert into bluetooth(username,bluetooth) values('$username','$bluetooth')";
    $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
    if($result!==false && $result2!==false){
        createDefaultBankAccount($username,$password,$account);

        require_once('../Pay.php');
        pay($account,$position,$username);
        die("true");
    }else{
        die("false");
    }
}
else die("INVALID REQUEST!");
function createDefaultBankAccount($username,$password,$account){
    $query="insert into account(no,username,pin,balance) values('$account','$username','$password','0.00')";
    $con=mysqli_connect('localhost','root','','bank');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
}