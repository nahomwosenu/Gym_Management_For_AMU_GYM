<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: updatetraining.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM training WHERE t_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'updatetraining.php'</script>";
?>