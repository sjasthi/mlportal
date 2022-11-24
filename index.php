<!DOCTYPE html>
<html lang="en" style="background-color: #1c1c1c">

<head>

  <link href="./styles.css" rel="stylesheet" type="text/css" media="all" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/81c2c05f29.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>

  <title>Machine Learning Portal</title>
<style>

</style>
</head>
<body>

<?php include "header.php"; 
require_once "connection.php";
$resource_id = "";
$resource_topic = "";
$resource_description = "";
$resource_type = "";
$resource_keywords = "";
$resource_links = "";
$resource_userID = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// establist connection with database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//set charset to utf-8
$conn->set_charset("utf8");
//create sql
$sql = "SELECT * FROM resources ORDER BY RAND()";
$result = $conn->query($sql);
?>

<h1 style="text-align:center">Welcome To The Machine Learning Portal</h1>

<main>
<?php
while ($row = mysqli_fetch_assoc($result)) {
  if($row["thumbnail"] == NULL){
    $resource_tn = "https://techbullion.com/wp-content/uploads/2021/05/technology-5917370_1280.png";
  } else {
    $resource_tn = $row["link"]; ;
  }
 ?>
        <div class="card">
          <div class="card-item">
              <img src=<?php echo $resource_tn ?> style="width: 250px;">
              <p class="topic_name"><?php echo $row["topic"]; ?></p>
              <button class="home-button" href=<?php echo'view-resources.php?id='. $row["id"];?>>Open Resource</button>
              </div>
            </div></br>
            <?php
}
            ?>
          </main>
</html>
