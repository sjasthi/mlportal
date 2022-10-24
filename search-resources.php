<?php


  include "connection.php";


 

$resource_id = "";
$resource_topic = "";
$resource_description = "";
$resource_type = "";
$resource_keywords = "";
$resource_links = "";
$resource_user = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// establist connection with database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//set charset to utf-8
$conn->set_charset("utf8");
//create sql

    

$search = $_POST['search'];


$sql = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
$result = $conn->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}
$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);

echo json_encode($dataset);

?>

