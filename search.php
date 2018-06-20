<?php 
	function search($term){
		require('conf.php');
		$query="select * from member where phone='$term' or fname='$term' or lname='$term' or username='$term'";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		$data='';
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$data[$counter]['fullname']=$row['fname'].' '.$row['lname'];
			$data[$counter]['profile']=$row['profile'];	
			$data[$counter]['phone']=$row['phone'];
			$data[$counter]['usertype']=$row['user_type'];
			$data[$counter]['username']=$row['username'];
			$data[$counter]['password']=$row['password'];
			$data[$counter]['member_id']=$row['member_id'];
			$counter++;
		}
		return $data;
	}
?>