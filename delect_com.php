<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: view_main't requested.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM maintenance WHERE m_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'view_main't requested.php'</script>";
?>