<?php
if(isset($_POST['video'])){
    $query="select link,icon,length from video";
    $con=mysqli_connect('localhost','root','','amitgms');
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    $videos="";
    while($row=mysqli_fetch_array($result)){
        $link=$row['link'];
        $icon=$row['icon'];
        $length=$row['length'];
        $videos=$link.",".$icon.",".$length.";";
    }
}