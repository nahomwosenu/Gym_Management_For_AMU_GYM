<?php
if(isset($_POST['get'])){
    $query="select news,date from news";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    $data="";
    while($row=mysqli_fetch_array($result)){
        $news=$row['news'];
        $date=$row['date'];
        $data=$data.$news.",".$date.";";
    }
    die($data);
}