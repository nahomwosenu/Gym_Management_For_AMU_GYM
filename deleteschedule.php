<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: update schedule.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM schedule WHERE s_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'update schedule.php'</script>";
?>