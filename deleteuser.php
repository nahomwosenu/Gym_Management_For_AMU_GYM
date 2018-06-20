<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: edit.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM member WHERE member_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'edit.php'</script>";
?>