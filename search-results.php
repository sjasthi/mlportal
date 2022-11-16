<?php
  require_once "connection.php";
  include "header.php";

  //if(!isset($_POST['search'])){
    //header("Location:index.php");
  //}

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// establist connection with database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//set charset to utf-8
$conn->set_charset("utf8");
 
  $search = $_POST['search'];
  $query = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";

  $GLOBALS['data'] = mysqli_query($conn, $query);
  
?>

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
  <title>Search Results</title>
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
  </style>
</head>

 <div class="resource-buttons">
    <a href="add-resource.php">
        <button type="button" class="general-button">Add Resource</button></a>
</div>   

    <h1>Search Results</h1>
    <table id="searchedTable" class="display" width="100%" cellspacing="0">
    <thead>
        <tr> 
            <th style="color: white;">topic</th>
            <th style="color: white;">topic</th>
            <th style="color: white;">description</th>
            <th style="color: white;">type</th>
            <th style="color: white;">keywords</th>
        </tr>
    </thead>
    <tbody>
      <?php
        if($data->num_rows > 0){
          while($row = $data->fetch_assoc()){
            $resource_topic = $row["topic"];
            $resource_description = $row["description"];
            $resource_type = $row["type"];
            $resource_keywords = $row["keywords"];

            echo '<tr>
            <td>'.$row['id'].'</td>
            <td><a href=view-resources.php?id='.$row['id'].'>'.$row["topic"].'</a></td>
            <td>'.$row["description"].'</td>
            <td>'.$row["type"].'</td>
            <td>'.$row["keywords"].'</td>
            </tr>';

            
            
          }//end while loop
        }//end if statement
      ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#searchedTable').dataTable({
            "processing": true,
            "columns": [
                {data: 'topic'},
                {data: 'description'},
                {data: 'type'},
                {data: 'keywords'},
            ]
        });
    });
    </script>

  </div>
</html>