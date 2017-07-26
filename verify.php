
<?php

if(isset($_POST['submit']))
	{
		$username = $_POST['name'];
		$password = $_POST['Password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("test");

$result = mysql_query("select * from login where username = '$username' and password = '$password'") or die("failed to query the database".mysql_error());

$row = mysql_fetch_array($result);
		
		session_start();
		$_SESSION['USER'] = $username;
		echo '<br /><a href="page2.php">page 2</a>';


if($row['username'] == $username && $row['password'] == $password)
{
	$redirecct = 'http://localhost/loginEX/AJAX.php';
	header('Location: '.$redirecct);
}
else
{
	echo "failed to login"; 
}
	}

?>
