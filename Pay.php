<?php 
 function pay($account,$type,$username){
 	$fee=0;
 	if($type=='student'){
 		$fee=30;
 	}
 	else if($type=='staff')
 		$fee=60;
 	else if($type=='community')
 		$fee=240;
 	else
 		$fee=740;
 	if(isValidAccount($account)===false)
 		return false;
 	$result=requestPayment($account,$fee,$username);
 	if($result===true){
 		return true;
 	}
 	else return false;
 }
 function checkPayment($username){
 	$query="select payment from member where username='$username'";
 	require('conf.php');
 	$result=mysqli_query($con,$query) or die(mysqli_error($con));
 	if($row=mysqli_fetch_array($result)){
 		$payment=$row['payment'];
 		return $payment;
 	}
 	else
 		return "NOT_PAYED";
 }
 function requestPayment($account,$amount,$username){
 	$details="AMU GYM Club monthly payment, please approve this payment if you want to continue attending in our Gym club.";
 	$query="insert into request(account,client,details,payee_account,amount,status,username) values('10001','AMU GYM','$details','$account','$amount','not_approved','$username')";
 	$con=mysqli_connect('localhost','root','','bank') or die(mysqli_error($con));
 	$result=mysqli_query($con,$query) or die(mysqli_error($con));
 	if($result!==false)
 		return true;
 	else return false;
 }
 function isValidAccount($account){
 	$query="select no from account where no='$account'";
 	$con=mysqli_connect('localhost','root','','bank') or die(mysqli_error($con));
 	$result=mysqli_query($con,$query) or die(mysqli_error($con));
 	if($row=mysqli_fetch_array($result)){
 		return true;
 	}else{
 		return false;
 	}
 }
?>