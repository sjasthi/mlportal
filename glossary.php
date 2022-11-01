<!DOCTYPE html>
<html lang="en" style="background-color: #1c1c1c">
<head>
    <link href="./styles.css" rel="stylesheet" type="text/css" media="all" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Glossary</title>
</head>

<?php include "header.php" ?>

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

<h1 style="text-align:center;">Browse Machine Learning Glossaries</h1>
    
<table class="glossaryTable">
<thead>
<tr>
<th style="font-size: 24px">Glossary Source</th>
<th style="font-size: 24px">Link To Glossary</th>
</tr>
</thead>
<tbody>
<tr>
<td style="font-size: 18px">Google</td>
<td><a href="https://developers.google.com/machine-learning/glossary" target="_blank">
        <button type="button" class="admin-button">View Glossary</button>
      </a></td>
</tr>
<tr>
<td style="font-size: 18px">Amazon</td>
<td><a href="https://docs.aws.amazon.com/general/latest/gr/glos-chap.html" target="_blank">
        <button type="button" class="admin-button">View Glossary</button>
      </a></td>
</tr>
</tbody>
</table>

</body>
</html>