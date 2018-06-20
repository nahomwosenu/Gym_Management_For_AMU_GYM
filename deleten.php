<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: deletenews.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM news WHERE n_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'deletenews.php'</script>";
?>