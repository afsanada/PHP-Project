<?php

require_once("connection.php");
if(isset($_POST['submit']))
{
$sql = "INSERT INTO ldap(username,password,host,port,basedn,time_stamp)
            VALUES 
                (?,?,?,?,?,?)
           ";

    	if (!$stmt = $con->prepare($sql)) 
		{
        echo 'Database prepare error';
        exit;
    	}
	$stmt->bind_param('ssssss',$username,$password,$ldapconfig['host'],$ldapconfig['port'],$ldapconfig['basedn'],$midnight);
$username=$_POST['username'];
$password=$_POST['password'];
$ldapconfig['host'] = $_POST['password'];
$ldapconfig['port'] = $_POST['password'];
$ldapconfig['basedn'] = $_POST['password'];
$midnight = date("m/d/Y h:i:s a", time());
		if (!$stmt->execute()) 
		{
        echo 'Database execute error';
        exit;
    	}
	header("Location:report.php");
   	$stmt->close();
	}

?>