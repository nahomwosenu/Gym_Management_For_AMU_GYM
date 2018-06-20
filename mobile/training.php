<?php
if(isset($_POST['request'])){
    $query="select title,location,date from training";
    $db=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($db,$query) or die(mysqli_error($db));
    $data="";
    $i=0;
    while($row=mysqli_fetch_array($result)){
        $title=$row['title'];
        $location=$row['location'];
        $date=$row['date'];
        $data=$data.$title."==".$location."==".$date.";;";
    }
    die($data);
}