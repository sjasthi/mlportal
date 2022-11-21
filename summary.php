<?php
require_once "connection.php";
include "header.php";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// establist connection with database
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//set charset to utf-8
$conn->set_charset("utf8");



//$supervised = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$supervised_count =
//$unsupervised = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$unsupervised_count =
//$python = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$python_count =
//$linear_regression = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$linear_regression_count =
//$neural_networks = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$neural_networks_count =
//$naive_bayes = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$naive_bayes_count =
//$k_means = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$k_means_count =
//$decision_trees = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$decision_trees_count =
//$logistic_regression = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$logistic_regression_count =
//$applications = "SELECT * FROM resources WHERE topic LIKE '%$search%' OR description LIKE '%$search%' OR keywords LIKE '%$search%'";
//$applications_count = 




?>

<!DOCTYPE html>
<html lang="en" style="background-color: #1c1c1c">
<head>
    <link href="./styles.css" rel="stylesheet" type="text/css" media="all" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Summary</title>
</head>



<body>

<style>
table.glossaryTable {
  font-family: "Arial Black", Gadget, sans-serif;
  border: 2px solid #f7b733;
  background-color: #4A4A4A;
  width: 100%;
  height: 200px;
  text-align: center;
  border-collapse: collapse;
}
table.glossaryTable td, table.glossaryTable th {
  border: 1px solid #4A4A4A;
  padding: 3px 2px;
}
table.glossaryTable tbody td {
  font-size: 13px;
  color: #E6E6E6;
}
table.glossaryTable tr:nth-child(even) {
  background: #888888;
}
table.glossaryTable thead {
  background: #1c1c1c;
  border-bottom: 3px solid #000000;
}
table.glossaryTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #E6E6E6;
  text-align: center;
  border-left: 2px solid #4A4A4A;
}
table.glossaryTable thead th:first-child {
  border-left: none;
}

table.glossaryTable tfoot td {
  font-size: 12px;
}
</style>

<h1 style="text-align:center;">Resource Keyword Summary</h1>
    
<table class="glossaryTable">
<thead>
<tr>
<th style="font-size: 24px">Keyword</th>
<th style="font-size: 24px">Resource Count</th>
</tr>
</thead>
<tbody>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Supervised Learning</td>
<td>
        <button type="button" id="supervised_learning" class="admin-button" value="supervised" onclick="search(this)"><?php $supervised = "SELECT COUNT(id) as supervised_total FROM resources WHERE topic LIKE '%supervised%' OR keywords LIKE '%supervised%'";
$supervised_count = mysqli_query($conn, $supervised);
$supervised_count_result = $conn->query($supervised);
if ($supervised_count_result->num_rows > 0) {
while ($row = $supervised_count_result->fetch_assoc()){
    echo $row['supervised_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Intro To Machine Learning</td>
<td>
        <button type="button" id="intro" class="admin-button" value="intro" onclick="search(this)"><?php $intro_to_machine_learning = "SELECT COUNT(id) as intro_total FROM resources WHERE topic LIKE '%intro%' OR keywords LIKE '%intro%'";
$intro_to_machine_learning_count = mysqli_query($conn, $intro_to_machine_learning);
$intro_to_machine_learning_count_result = $conn->query($intro_to_machine_learning);
if ($intro_to_machine_learning_count_result->num_rows > 0) {
while ($row = $intro_to_machine_learning_count_result->fetch_assoc()){
    echo $row['intro_total'];
}};?></button>
      </a></td>
</tr>
</tbody>
</table>

</body>

<script>
    function search(keyword) {
      searchUrl = "search-results.php?search=" + keyword.value;
      window.location.href = searchUrl;
    }
  </script>

</html>