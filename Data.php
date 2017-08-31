<html>
<body>
<head>
<title>DATA</title>
</head>
<?php

$connect = mysqli_connect("localhost","root","root","sampledb");
$query = "SELECT `USERNAME` FROM `LOGIN` WHERE `USERNAME`='Benny'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run)==1) 
{
	
$sql = "SELECT * FROM DEF";
$result = mysqli_query($connect,$sql);
$json_array = array();

while($row = mysqli_fetch_assoc($result))
{
	$json_array = $row;
}

echo json_encode($json_array);

echo '<pre>';
print_r($json_array);
echo '<pre>';
}

else
{
	echo "Authentication Failed";

}
?>
</body>
</html>