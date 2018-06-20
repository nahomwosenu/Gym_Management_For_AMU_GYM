<?php
if(isset($_POST['username'])){
    $result=isValidUsername($_POST['username']);
    die($result);
}
if(isset($_POST['email'])){
    $result=isValidEmail($_POST['email']);
    die($result);
}
function isValidUsername($username){
    $query="select username from member where username='$username'";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    if($row=mysqli_fetch_array($result)){
        die("false");
    }
    die("true");
}
function isValidEmail($email){
    $query="select username from member where email='$email'";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    if($row=mysqli_fetch_array($result)){
        die("false");
    }
    die("true");
}