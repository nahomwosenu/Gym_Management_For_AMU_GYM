<?php
if(isset($_POST['address'])){
    $address=$_POST['address'];
    $query="select username from bluetooth where bluetooth='$address'";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    if($row=mysqli_fetch_array($result)){
        $username=$row['username'];
        if(attended($username))
            die($username.";approved");
        die($username);
    }
    else die("false");
}
if(isset($_POST['list'])){
    $list=$_POST['list'];
    if(!empty($list)){
        $users=explode(',',$list);
        $count=count($users);
        $date=date('Y-m-d');
        for($i=0;$i<$count;$i++){
            $username=getUsername($users[$i]);
            if(attended($username)==true)
                continue;
            if($users[$i]=='' || $users[$i]==' ')
                break;
            $query="insert into attendance(username,date) values('".$username."','$date')";
            $con=mysqli_connect('localhost','root','','amitgms');
            $result=mysqli_query($con,$query) or die(mysqli_error($con));
        }
    }
    die('true');
}
function attended($username){
    $date=date('Y-m-d');
    $query="select date from attendance where username='$username' and date='$date'";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    if($row=mysqli_fetch_array($result)){
        return true;
    }
    else return false;
}
function getUsername($bluetooth){
    $query="select username from bluetooth where bluetooth='$bluetooth'";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    if($row=mysqli_fetch_array($result)){
        return $row['username'];
    }
    return false;
}