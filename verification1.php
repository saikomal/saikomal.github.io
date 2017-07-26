<?php
	$username = $_GET['UserName'];
	$password = $_GET['Password'];
	    
$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("test");

$result = mysql_query("select * from login where username = '$username' and password = '$password'") or die("failed to query the database".mysql_error());

$row = mysql_fetch_array($result);
if($row =['username'] == $username && $row['password'] == $password)
{
	echo "login successfull";
}
else
{
	echo "failed"; 
}
	?>