<!doctype html>
<html>
<head>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

<meta charset="UTF-8">
<title>Untitled Document</title>
<style type = "text/css">
	table{  
		 border-collapse:inherit;
    width: 60%;
	}
	th, td {
    text-align:inherit;
    padding: 8px;
}
	tr:nth-child(even){background-color: #f2f2f2}
	th {
    background-color: #4CAF50;
    color: white;
}
	</style>
</head>

<body>
<?php
$db = new SQLite3('databse.db');

session_start();

$usertype = $_SESSION['USER'];
if($usertype == "admin" )
{
	$queryresult = $db->query('select * from DETAILS where rfid = (SELECT rfid FROM LOGFILE where rowid = (select max(rowid) from LOGFILE))');
}
else
{
	$queryresult = $db->query('select * from DETAILS where rfid = (SELECT rfid FROM LOGFILE where rowid = (select max(rowid) from LOGFILE where user = "'.$usertype.'" ))');
}


//echo "CODE:   {$res['name']}  ";

/*
while ($row = $result->fetchArray())
{
	
	$rfidno = $row['rfid']; 
	echo "CODE:   {$row['rfid']}  ";
	echo "TIME:   {$row['time']}  ";
	echo "USER:   {$row['user']}  "; 
	echo nl2br("\n");
	echo nl2br("\n");

}*/

while ($row1 = $queryresult->fetchArray())
{
	
	/*echo "CODE:   {$row1['rfid']}  ";
	$_SESSION['code']=$row1['rfid'];
	echo "name:   {$row1['name']}  ";
	$_SESSION['name']=$row1['name'];
	echo "age:   {$row1['age']}  "; 
	$_SESSION['age']=$row1['age'];
	echo "fathername:   {$row1['fathername']}  "; 
	$_SESSION['fathername']=$row1['fathername'];
	echo "password:   {$row1['password']}  "; 
	$_SESSION['password']=$row1['password'];
	echo "address:   {$row1['address']}  "; 
	$_SESSION['address']=$row1['address'];
	echo "bloodgroup:   {$row1['bloodgroup']}  "; 
	$_SESSION['bloodgroup']=$row1['bloodgroup'];
*/
	/*echo "<table>";
echo "<tr><th>RFID:</th><th>NAME</th><th>age</th><th>fathername</th><th>password</th><th>address</th><th>bloodgroup</th></tr>";
echo "<tr><td>";
echo $row1['rfid'];
echo "</td><td>";
echo $row1['name'];
echo "</td><td>";
echo $row1['age'];
echo "</td><td>";
echo $row1['fathername'];
echo "</td><td>";
echo $row1['password'];
echo "</td><td>";
echo $row1['address'];
echo "</td><td>";
echo $row1['bloodgroup'];
echo "</td></tr>";
echo "</table>";*/
	echo "<table>";

	echo "<tr><th>RFID";
echo "</th><td>";
echo $row1['rfid'];
echo "</td></tr>";
	
	echo "<tr><th>NAME";
echo "</th><td>";
echo $row1['name'];
echo "</td></tr>";
	
	echo "<tr><th>FATHER-NAME";
echo "</th><td>";
echo $row1['fathername'];
echo "</td></tr>";
	
	echo "<tr><th>AGE";
echo "</th><td>";
echo $row1['age'];
echo "</td></tr>";
	
	echo "<tr><th>PASSWORD";
echo "</th><td>";
echo $row1['password'];
echo "</td></tr>";
	
	echo "<tr><th>ADDRESS";
echo "</th><td>";
echo $row1['address'];
echo "</td></tr>";
	
	echo "<tr><th>BLOOD-GROUP";
echo "</th><td>";
echo $row1['bloodgroup'];
echo "</td></tr>";
	
echo "</table>";
	
}






//print_r($db->querySingle('select * from DETAILS where rfid = (SELECT rfid FROM LOGFILE where rowid = (select max(rowid) from LOGFILE))', true));



//if(isset($_POST['name'])){
	//$name = $_POST['name'];
	//echo strrev($name);
//}
?>
<br>
<br>
<br>


<form method="get" action="http://localhost/loginEX/history.php">
    <button type="submit" class="log-btn">history</button>
</form>

</body>
</html>

