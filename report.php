
<!DOCTYPE html>
<head>
	<title>Report </title>
	<link href="feed.css" rel="stylesheet">
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<!-- Body Starts Here -->
<body>
<div class="container">			
			<center><h2>Report</h2></center>
<?php
require_once("connection.php");
$sql1="SELECT * FROM ldap";
$result = $con->query($sql1);
$Arr = $result->fetch_array();
$id=$Arr['id'];?>
<div class="container">
       <div class="row">
          <div class="col-lg-10 col-sm-10 well"> 
            <table class="table" id="tblData">
              <thead>
			    <tr>
					<th>Username</th>
					<th>Password</th>
					<th>Host</th>
					<th>Port</th>
					<th>Basedn</th>
					<th>Time Stamp</th>
				</tr>
              </thead>
   <tbody>
<?php
if(isset($_POST['search']))
{
$search=$_POST['t1'];
$sql1="SELECT * FROM ldap WHERE store='$search'";
$result = $con->query($sql1);
	while($Arr = $result->fetch_array())
	{
	$id=$Arr['id'];
?>

<tr>
<td>   
<?php echo $Arr['username']; ?>
</td>
    <td>   
	<?php echo $Arr['password']; ?>
	</td>
	<td>   
	<?php echo $Arr['host']; ?>
	</td>
	<td>   
	<?php echo $Arr['port']; ?>
	</td>
	<td>   
	<?php echo $Arr['basedn']; ?>
	</td>
	<td>   
	<?php echo $Arr['time_stamp']; ?>
	</td>
	<tr>
	<?php
	}
}
else
{
$sql1="SELECT * FROM ldap";
$result = $con->query($sql1);
	while($Arr=$result->fetch_array())
	{
	$id=$Arr['id'];
?>
<tr>
	<td>   
<?php echo $Arr['username']; ?>
</td>
    <td>   
	<?php echo $Arr['password']; ?>
	</td>
	<td>   
	<?php echo $Arr['host']; ?>
	</td>
	<td>   
	<?php echo $Arr['port']; ?>
	</td>
	<td>   
	<?php echo $Arr['basedn']; ?>
	</td>
	<td>   
	<?php echo $Arr['time_stamp']; ?>
	</td>
	</tr>
	<?php
	}
}
?>
</tr>
     </tbody>
         </table>
		 
<!-- report Ends Here -->
  </center>
</div>
</div>
</body>
<!-- Body Ends Here -->
</html>
