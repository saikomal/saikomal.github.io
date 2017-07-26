<!doctype html>
<html>
<head>
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
	$result = $db->query('select * from LOGFILE');
}
else
{
$result = $db->query('select * from LOGFILE where user = "'.$usertype.'" ');
}
	echo "<table>";
	echo "<tr><th>RFID:</th><th>TIME</th><th>USER</th></tr>";

	while ($row = $result->fetchArray())
{
	
/*	$rfidno = $row['rfid']; 
	echo "CODE:   {$row['rfid']}  ";
	echo "TIME:   {$row['time']}  ";
	echo "USER:   {$row['user']}  "; 
	echo nl2br("\n");
	echo nl2br("\n");*/
	echo "<tr><td>";
echo $row['rfid'];
echo "</td><td>";
echo $row['time'];
echo "</td><td>";
echo $row['user'];
echo "</td></tr>";

}
	echo "</table>";
	?>
</body>
</html>