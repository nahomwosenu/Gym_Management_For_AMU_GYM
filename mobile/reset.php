<?php
require_once('lib/password.php');
if(isset($_POST['question'])){
    $question=$_POST['question'];
    $answer=$_POST['answer'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q=getSecurityQuestion($username);
    $a=getSecurityAnswer($username);
    if($q==false || $a==false){
        die("false");
    }
    if($a!=$answer){
        die("wrong_answer");
    }
    else if($a==$answer){
        $password=password_hash($password,PASSWORD_DEFAULT);
        $query="update member set password='$password' where username='$username'";
        $db=mysqli_connect('localhost','root','','amitgms');
        $result=mysqli_query($db,$query) or die(mysqli_error($db));
        die("true");
    }
}
function getSecurityQuestion($username){
    $query="select question from member where username='$username'";
    $db=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($db,$query) or die(mysqli_error($db));
    if($row=mysqli_fetch_array($result)){
        return $row['question'];
    }
    return false;
}
function getSecurityAnswer($username){
    $query="select answer from member where username='$username'";
    $db=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($db,$query) or die(mysqli_error($db));
    if($row=mysqli_fetch_array($result)){
        return $row['answer'];
    }
    return false;
}