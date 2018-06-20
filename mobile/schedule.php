<?php
if(isset($_POST['day'])){
    $day=$_POST['day'];
    $gym=$_POST['gym'];
    $query="select tstart,tend,trainername from schedule where day='$day' and tgym='$gym'";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    $data="";
    while($row=mysqli_fetch_array($result)){
        $startDay=$row['tstart'];
        $endDay=$row['tend'];
        $trainer=$row['trainername'];
        $data=$data.$startDay.",".$endDay.",".$trainer.";";
    }
    die($data);
}