<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: editequipment.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM equipmenet WHERE e_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'editequipment.php'</script>";
?>