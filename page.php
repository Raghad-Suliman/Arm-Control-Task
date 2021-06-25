<?php 

$put = $_POST['put'];  
$put1 = $_POST['put1']; 
$put2 = $_POST['put2']; 
$put3 = $_POST['put3']; 
$put4 = $_POST['put4']; 
$put5 = $_POST['put5'];


$conn = new mysqli('127.0.0.1','root',"","control");
$stmt = $conn->prepare("insert into controlpage (Motor1, Motor2, Motor3, Motor4, Motor5, Motor6) values(?, ?, ?, ?, ?, ?);")
$stmt->bind_param("iii", $put, $put1, $put2, $put3, $put4, $put5);
$stmt->execute();
echo "Done"


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


?>