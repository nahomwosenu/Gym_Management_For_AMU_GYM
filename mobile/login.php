<?php
session_start();
require_once('lib/password.php');
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select user_type,password from member where username='$username'";
    $db=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($db,$query) or die(mysqli_error($db));
    if($row=mysqli_fetch_array($result)){
        $hash=$row['password'];
        $login=password_verify($password,$hash);

        $type=$row['user_type'];
        $_SESSION['username']=$username;
        if($type=='trainer' && $login==true){
            die("trainer");
        }
        else if($type=='trainee' && $login==true){
            require_once('../Pay.php');
            $payment=checkPayment($username);
                if($payment!='complete'){
                    die("payment_error");
                }
            die("true");
        }
        else{
            $question=getSecurityQuestion($username);
            $answer=getSecurityAnswer($username);
            if($question==false || $answer==false){
                die("false");
            }else{
                $result=$question.";".$answer;
                die($result);
            }
        }

    }
    else{
        $question=getSecurityQuestion($username);
        $answer=getSecurityAnswer($username);
        if($question==false || $answer==false){
            die("false");
        }else{
            $result=$question.";".$answer;
            die($result);
        }
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