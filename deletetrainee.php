<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: updatetrainee.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM member WHERE member_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'updatetrainee.php'</script>";
?>