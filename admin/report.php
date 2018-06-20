<?php /*total number of users
total number of active users
total income
total equipment*/
	function getTotalUsers(){
		require_once('conf.php');
		$query="select * from member where worktype='student' or worktype='staff' or worktype='guest' or worktype='community'";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$counter++;
		}
		return $counter;
	}
	function getActiveUsers(){
		require('conf.php');
		$query="select * from member where (worktype='student' or worktype='staff' or worktype='guest' or worktype='community') and payment='complete'";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$counter++;
		}
		return $counter;
	}
	function getTotalIncome(){
		require('conf.php');
		$con2=mysqli_connect('localhost','root','','bank');
		$query="select balance from account where no='10001'";
		$result=mysqli_query($con2,$query) or die(mysqli_error($con));
		if($row=mysqli_fetch_array($result))
			return $row['balance'];
		return 0;
	}
	function getEquipment(){
		require('conf.php');
		$query="select * from equipmenet";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$counter++;
		}
		return $counter;
	}
	function getUsers($worktype){
		require('conf.php');
		$query="select * from member where worktype='$worktype'";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$counter++;
		}
		return $counter;
	}

?>
