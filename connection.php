<?php
/*Connect db*/
$con=new mysqli("localhost","root","","ldap");

if($con->connect_errno>0)
{
echo "connection failed".mysqli_connect_error();
}
?>
