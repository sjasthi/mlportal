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
<td style="font-size: 18px">Unsupervised/Supervised Learning</td>
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
<td style="font-size: 18px">Python</td>
<td>
        <button type="button" id="python" class="admin-button" value="python" onclick="search(this)"><?php $python = "SELECT COUNT(id) as python_total FROM resources WHERE topic LIKE '%python%' OR keywords LIKE '%python%'";
$python_count = mysqli_query($conn, $python);
$python_count_result = $conn->query($python);
if ($python_count_result->num_rows > 0) {
while ($row = $python_count_result->fetch_assoc()){
    echo $row['python_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Regression</td>
<td>
        <button type="button" id="regression" class="admin-button" value="regression" onclick="search(this)"><?php $regression = "SELECT COUNT(id) as regression_total FROM resources WHERE topic LIKE '%regression%' OR keywords LIKE '%regression%'";
$regression_count = mysqli_query($conn, $regression);
$regression_count_result = $conn->query($regression);
if ($regression_count_result->num_rows > 0) {
while ($row = $regression_count_result->fetch_assoc()){
    echo $row['regression_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Neural Networks</td>
<td>
        <button type="button" id="neural" class="admin-button" value="neural" onclick="search(this)"><?php $neural = "SELECT COUNT(id) as nn_total FROM resources WHERE topic LIKE '%neural%' OR keywords LIKE '%neural%'";
$nn_count = mysqli_query($conn, $neural);
$nn_count_result = $conn->query($neural);
if ($nn_count_result->num_rows > 0) {
while ($row = $nn_count_result->fetch_assoc()){
    echo $row['nn_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Decision Trees</td>
<td>
        <button type="button" id="decision" class="admin-button" value="decision" onclick="search(this)"><?php $decision = "SELECT COUNT(id) as dt_total FROM resources WHERE topic LIKE '%decision tree%' OR keywords LIKE '%decision tree%'";
$dt_count = mysqli_query($conn, $decision);
$dt_count_result = $conn->query($decision);
if ($dt_count_result->num_rows > 0) {
while ($row = $dt_count_result->fetch_assoc()){
    echo $row['dt_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Applications</td>
<td>
        <button type="button" id="application" class="admin-button" value="application" onclick="search(this)"><?php $application = "SELECT COUNT(id) as apps_total FROM resources WHERE topic LIKE '%applications%' OR keywords LIKE '%applications%'";
$apps_count = mysqli_query($conn, $application);
$apps_count_result = $conn->query($application);
if ($apps_count_result->num_rows > 0) {
while ($row = $apps_count_result->fetch_assoc()){
    echo $row['apps_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Videos</td>
<td>
        <button type="button" id="video" class="admin-button" value="video" onclick="search(this)"><?php $video = "SELECT COUNT(id) as video_total FROM resources WHERE type LIKE '%video%' OR keywords LIKE '%video%'";
$video_count = mysqli_query($conn, $video);
$video_count_result = $conn->query($video);
if ($video_count_result->num_rows > 0) {
while ($row = $video_count_result->fetch_assoc()){
    echo $row['video_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Websites</td>
<td>
        <button type="button" id="website" class="admin-button" value="website" onclick="search(this)"><?php $website = "SELECT COUNT(id) as website_total FROM resources WHERE type LIKE '%website%' OR keywords LIKE '%website%'";
$website_count = mysqli_query($conn, $website);
$website_count_result = $conn->query($website);
if ($website_count_result->num_rows > 0) {
while ($row = $website_count_result->fetch_assoc()){
    echo $row['website_total'];
}};?></button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Blogs</td>
<td>
        <button type="button" id="blog" class="admin-button" value="blog" onclick="search(this)"><?php $blog = "SELECT COUNT(id) as blog_total FROM resources WHERE type LIKE '%blog%' OR keywords LIKE '%blog%'";
$blog_count = mysqli_query($conn, $blog);
$blog_count_result = $conn->query($blog);
if ($blog_count_result->num_rows > 0) {
while ($row = $blog_count_result->fetch_assoc()){
    echo $row['blog_total'];
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