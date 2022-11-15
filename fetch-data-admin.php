<?php
session_start();
require_once "connection.php";

$user_id = "";
$resource_id = "";
$resource_topic = "";
$resource_description = "";
$resource_type = "";
$resource_keywords = "";
$resource_links = "";
$resource_user = "";

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// establist connection with database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//set charset to utf-8
$conn->set_charset("utf8");
//create sql
$sql = "";

if ($_SESSION['role'] == 'instructor'){
    $sql = "SELECT * FROM resources WHERE instructor_id = $user_id";
}

if ($_SESSION['role'] == 'admin'){
    $sql = "SELECT * FROM resources";
}

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
