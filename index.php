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
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
  <title>Machine Learning Portal</title>
  <style>
    .dataTables_length select  {
    background-color: white !important;
 }
  .dataTables_filter input  {
    background-color: white !important; 
    color: black;
 }
 .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter{
  color: white;
 }
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.btn:hover {
  background-color: #ddd;
}
* {
      box-sizing: border-box;
    }

    [class*="col-"] {
      float: left;
      padding: 15px;
    }

    .col-1 {
      width: 8.33%;
    }

    .col-2 {
      width: 16.66%;
    }

    .col-3 {
      width: 25%;
    }

    .col-4 {
      width: 33.33%;
    }

    .col-5 {
      width: 41.66%;
    }

    .col-6 {
      width: 50%;
    }

    .col-7 {
      width: 58.33%;
    }

    .col-8 {
      width: 66.66%;
    }

    .col-9 {
      width: 75%;
    }

    .col-10 {
      width: 83.33%;
    }

    .col-11 {
      width: 91.66%;
    }

    .col-12 {
      width: 100%;
    }

    .resource-container {
      display: block;
      width: 90%;
    }

    .home-resource-row {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #D9D9D9;
      min-height: 150px;
      width: 100%;
      margin: 20px;
      padding: 20px;
      border-radius: 20px;

    }

    .home-resource-row:hover {
      /* justify-content: center;
      align-items: center; */
      background-color: #bfbdbd;
      /* min-height: 200px;
      width: 100%;
      margin: 20px;
      padding: 20px;
      border-radius: 20px; */

    }


    .home-resource-topic {
      text-align: center;
      text-transform: uppercase;
      font-size: 25px;
    }

    .home-resource-description {
      color: #5b5c5b;
    }

    .home-resource-media-preview {
      color: #5b5c5b;
      text-align: center;
    }

    .list-view {
      display: flex;
      width: 100%;
    }

    .grid-view {
      display: inline-grid;
      width: 30%;
    }

    @media only screen and (max-width: 768px) {
      [class*="col-"] {
        width: 100%;
      }

      .home-resource-description {
        text-align: center;
      }

      .home-resource-row {
        display: inline-block;
        width: 100%;
      }
    }
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
$resource_Links = "";
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
echo '<ul class= "resource-container">';
while ($row = mysqli_fetch_assoc($result)) {
    $resource_id = $row["id"];
    $resource_topic = $row["topic"];
    $resource_description = $row["description"];
    $resource_type = $row["type"];
    $resource_keywords = $row["keywords"];
    $resource_Links = $row["link"];
    $resource_user = $row["instructor_id"];

 $fetch=explode("=", $row["link"]);
 //echo '<img src="http://img.youtube.com/vi/'.$fetch[1].'/0.jpg" width="250"/>';

    echo '
        <li class="home-resource-row">
          <div class="home-resource-topic col-3">
          ' . $resource_topic . '
          </div>
          <div class="home-resource-description col-6">
          <img src='.$row["link"].' width="250"/>
          </div>
          <div class ="home-resource-media-preview col-3">
          ' . $resource_type . '
          </div>
        </li>
      ';
}
echo '</ul>'

?>;
</html>
