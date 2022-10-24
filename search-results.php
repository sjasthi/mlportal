<?php
  include "connection.php";
  include "header.php"

  //if(!isset($_POST['search'])){
    //header("Location:index.php");
  //}
 
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
    <table id="searched-table" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th style="color: white;">topic</th>
            <th style="color: white;">description</th>
            <th style="color: white;">type</th>
            <th style="color: white;">keywords</th>
        </tr>
    </thead>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $('#searched-table').dataTable({
            "processing": true,
            "ajax": "search-resources.php",
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