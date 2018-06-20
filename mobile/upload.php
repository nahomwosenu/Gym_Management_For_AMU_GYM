<?php
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $file=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"C:/xampp/htdocs/ps/img/".$username.".png");
    die("success");
}
else die("failure");