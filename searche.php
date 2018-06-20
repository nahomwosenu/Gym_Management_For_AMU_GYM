<?php 
	function search($term){
		require('conf.php');
		$query="select * from equipmenet where phone='$term' or ename='$term' or Etype='$term'";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		$data='';
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$data[$counter]['ename']=$row['ename'];
			$data[$counter]['profile']=$row['profile'];
			$data[$counter]['vendor']=$row['vendor'];
			$data[$counter]['phone']=$row['phone'];
			$data[$counter]['Etype']=$row['Etype'];
			$data[$counter]['e_id']=$row['e_id'];
			$counter++;
		}
		return $data;
	}
?>