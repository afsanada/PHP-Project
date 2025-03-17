<?php
session_start();
require_once("connection.php");
if(isset($_POST['submit']))
{
$username=$_POST['user'];
$password=$_POST['pass'];
 $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
	$result = $con->query($query);   
 if($result)
  {
   header('Location: home.php');
  }
  else
  {
  echo"Invalid Login Details";
  }
}
?>

