<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: view_feedback.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM feedback WHERE f_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'view_feedback.php'</script>";
?>