<?php


$db = mysql_connect("localhost","control","");
if (!$db) {
die("Database connection failed miserably: " . mysql_error());
}
$db_select = mysql_select_db("control",$db);
if (!$db_select) {
die("Database selection also failed miserably: " . mysql_error());
}
$result = mysql_query("SELECT * FROM controlpage", $db);
if (!$result) {
die("Database query failed: " . mysql_error());
}
while ($row = mysql_fetch_array($result)) {
    echo $row[1]." ".$row[2]."<br />";
    }
    mysql_close($db);    


$get = $_POST['get'];  
$get1 = $_POST['get1']; 
$get2 = $_POST['get2']; 
$get3 = $_POST['get3']; 
$get4 = $_POST['get4']; 
$get5 = $_POST['get5'];

mysql_connect('localhost','root',"","control");
mysql_select_db("control");

$query = mysql_query("insert into controlpage (Motor1, Motor2, Motor3, Motor4, Motor5, Motor6) values('$get', 'get1','$get2', '$get3', '$get4', '$get5')");

if ($query) {echo $get."has been saved"; }


?>
