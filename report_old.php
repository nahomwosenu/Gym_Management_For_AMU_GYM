<?php
include("connection.php");
session_start();
if(isset($_SESSION['id']))
 {
 $mail=$_SESSION['id'];
  
 }
 else 
 {
 ?>
 
 <?php
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href ="image/logo.png">
<title>System Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><img src="image/logo.png" width="110px" height="100px"><img width="650px" height="100px" src="image/admin.png" ></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="admin.php">Home</a></li>
			<li ><a href="report.php">Genrate Report</a></li>
			<li ><a href="view_comment1.php">Maintanance Requested</a></li>
			<li ><a href="newsand.php">Post News and Events</a></li>
			<li ><a href="deletenews.php">Delete News</a></li>
			<li><a href="logout.php" onClick="isConfirmlog();">Logout</a></li>
			
			
		</ul>
</div>
</p>
	<?php 
                                    if(isset($_REQUEST['keys']))
										{

											mysql_query("update report set status ='0'");
										}
										$re = mysql_query("select * from report where status='1' order by time DESC ");
										if(mysql_num_rows($re)>0)
										{
										echo "<div style='color:Green'>".mysql_num_rows($re)." Activities are performed till now today</div>";	
										?>  
										
							<div id="prin">
                                <table class="table table-striped table-bordered table-hover" id="">
								
                                    <thead>
                                        <tr>
											<th>Time</th>	
											<th>Date</th>
											<th>Username </th>
											<th>Full Name</th>
											<th>Activity</th>									  									
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                      <?php
									while($row = mysql_fetch_array($re))
									{
										$username = $row['username'];
										$select = mysql_query("select firstName,lastName from member where username ='$username'");
										$rr = mysql_fetch_array($select);
							
									?>
							
                                        <tr class="odd gradeX">
											<td><?php echo $row['time'];?></td>	
											<td><?php echo $row['date']; ?></td>
											<td><?php echo $row['username']; ?></td>
											<td><?php echo $rr['firstName']." ".$rr['lastName']; ?></td>									
											<td><?php echo $row['activity']; ?>
                                        </tr>                                 
								<?php 									
									}
									?>
									</tbody>
								
                                </table>
									</div>
								<?php
										}?>
                            </div>
                      </div>
							
<script>
function myFunction(id)
 {
  var html="<html>";
   html+= document.getElementById(id).innerHTML;
   html+="</html>";
   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
</div>
				 </div>
              </div>
             
					</div>
			
					</div>
					</div>
		</div>

</body>
</html>
<?php
?>